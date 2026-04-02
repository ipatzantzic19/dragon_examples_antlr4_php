<?php

use Context\ProgramContext;
use Context\AssignContext;
use Context\PrintContext;
use Context\IndicesContext;
use Context\IndexContext;
use Context\EmptyListContext;
use Context\ElementsListContext;
use Context\ValueListContext;
use Context\ValueNumContext;
use Context\ValueExprContext;

class EvalVisitor extends GrammarBaseVisitor
{
    public $data = ".data\n";
    public $text = ".text\n.global _start\n_start:\n";
    private $variables = [];

    private function get_dimensions($list)
    {
        if (is_array($list)) {
            if (empty($list)) {
                return [0];
            }
            $dims = $this->get_dimensions($list[0]);
            array_unshift($dims, count($list));
            return $dims;
        } else {
            return [];
        }
    }

    private function flatten_array($arr)
    {
        $result = [];
        array_walk_recursive($arr, function($a) use (&$result) {
            $result[] = $a;
        });
        return $result;
    }

    public function visitProgram($ctx)
    {
        $statements = $ctx->statement();
        if ($statements !== null) {
            foreach ($statements as $stmt) {
                $this->visit($stmt);
            }
        }
        
        // Finalizar programa
        $this->text .= "    \tmov x0, #0\n";
        $this->text .= "    \tmov x8, #93\n";
        $this->text .= "    \tsvc #0\n\n";

        // Función print_int (ITOA C fixed code)
        $this->text .= "print_int:\n";
        $this->text .= "    \tstr x30, [sp, #-48]!\n";
        $this->text .= "    \tmov x1, sp\n";
        $this->text .= "    \tadd x1, x1, #46\n";
        $this->text .= "    \tmov w2, #10\n";
        $this->text .= "    \tstrb w2, [x1]\n";
        $this->text .= "    \tmov x2, #10\n";
        $this->text .= "_L_itoa_check_zero:\n";
        $this->text .= "    \tcmp x0, #0\n";
        $this->text .= "    \tbge _L_itoa_loop\n";
        $this->text .= "    \tneg x0, x0\n";
        $this->text .= "_L_itoa_loop:\n";
        $this->text .= "    \tcbz x0, _L_itoa_sign\n";
        $this->text .= "    \tudiv x3, x0, x2\n";
        $this->text .= "    \tmsub x4, x3, x2, x0\n";
        $this->text .= "    \tadd x4, x4, #48\n";
        $this->text .= "    \tsub x1, x1, #1\n";
        $this->text .= "    \tstrb w4, [x1]\n";
        $this->text .= "    \tmov x0, x3\n";
        $this->text .= "    \tb _L_itoa_loop\n";
        $this->text .= "_L_itoa_sign:\n";
        $this->text .= "    \tldr x0, [sp, #48]\n";
        $this->text .= "    \tcmp x0, #0\n";
        $this->text .= "    \tbge _L_itoa_print\n";
        $this->text .= "    \tmov w2, #45\n";
        $this->text .= "    \tsub x1, x1, #1\n";
        $this->text .= "    \tstrb w2, [x1]\n";
        $this->text .= "_L_itoa_print:\n";
        $this->text .= "    \tmov x2, sp\n";
        $this->text .= "    \tadd x2, x2, #47\n";
        $this->text .= "    \tsub x2, x2, x1\n";
        $this->text .= "    \tmov x0, #1\n";
        $this->text .= "    \tmov x8, #64\n";
        $this->text .= "    \tsvc #0\n";
        $this->text .= "    \tldr x30, [sp], #48\n";
        $this->text .= "    \tret\n";

        return $this->data . "\n" . $this->text;
    }

    public function visitAssign($ctx)
    {
        $id = $ctx->ID()->getText();
        $expr = $this->visit($ctx->expression());

        $dimensions = $this->get_dimensions($expr);
        $dims_str = implode(', ', $dimensions);
        $expr_str = json_encode($expr); 

        fwrite(STDERR, "$id = $expr_str (dimensions: [$dims_str])\n");

        $this->variables[$id] = $expr;
        $value = $this->flatten_array($expr);

        $this->data .= "    $id: .word ";
        $nums = implode(', ', $value);
        if ($nums == "") {
            $this->data .= "0\n";
        } else {
            $this->data .= "$nums \n";
        }

        if (count($dimensions) == 1) {
            $this->data .= "    " . $id . "_cols: .word " . $dimensions[0] . "\n";
        } elseif (count($dimensions) == 2) {
            $this->data .= "    " . $id . "_rows: .word " . $dimensions[0] . "\n";
            $this->data .= "    " . $id . "_cols: .word " . $dimensions[1] . "\n";
        } elseif (count($dimensions) == 3) {
            $this->data .= "    " . $id . "_face: .word " . $dimensions[0] . "\n";
            $this->data .= "    " . $id . "_rows: .word " . $dimensions[1] . "\n";
            $this->data .= "    " . $id . "_cols: .word " . $dimensions[2] . "\n";
        }
        return null;
    }

    public function visitPrint($ctx)
    {
        $id = $ctx->ID()->getText();
        $indices = $this->visit($ctx->indices());

        $value = $this->variables[$id] ?? null;
        $dimensions = $this->get_dimensions($value);

        if ($value !== null) {
            if (count($indices) !== count($dimensions)) {
                $expected = count($dimensions);
                $received = count($indices);
                fwrite(STDERR, "Error: $id espera $expected indices, se recibieron $received\n");
                return null;
            }

            $val = $value;
            $idxStr = "";
            foreach ($indices as $level => $idx) {
                if (!is_array($val)) {
                    fwrite(STDERR, "Error: Acceso invalido a {$id}{$idxStr}[$idx]\n");
                    return null;
                }

                if ($idx < 0 || $idx >= count($val)) {
                    $dimSize = count($val);
                    $humanLevel = $level + 1;
                    fwrite(STDERR, "Error: Indice fuera de rango en {$id}{$idxStr}[$idx] (dimension $humanLevel, tamano $dimSize)\n");
                    return null;
                }

                $val = $val[$idx];
                $idxStr .= "[$idx]";
            }
            fwrite(STDERR, "$id$idxStr = $val\n");

            if (count($dimensions) == 1) {
                $this->text .= "    \tmov x0, #" . $indices[0] . "\n";
                $this->text .= "    \tlsl x1, x0, #2\n";
                $this->text .= "    \tadrp x2, $id\n";
                $this->text .= "    \tadd x2, x2, :lo12:$id\n";
                $this->text .= "    \tadd x0, x1, x2\n";
                $this->text .= "    \tldr w0, [x0]\n";
                $this->text .= "    \tsxtw x0, w0\n";
                $this->text .= "    \tbl print_int\n";
            } elseif (count($dimensions) == 2) {
                $this->text .= "    \tmov x0, #" . $indices[0] . "\n";
                $this->text .= "    \tlsl x0, x0, #2\n";
                $this->text .= "    \tmov x1, #" . $indices[1] . "\n";
                $this->text .= "    \tlsl x1, x1, #2\n";
                $this->text .= "    \tadrp x2, {$id}_cols\n";
                $this->text .= "    \tadd x2, x2, :lo12:{$id}_cols\n";
                $this->text .= "    \tldr w2, [x2]\n";
                $this->text .= "    \tmul x3, x0, x2\n";
                $this->text .= "    \tadd x4, x3, x1\n";
                $this->text .= "    \tadrp x5, $id\n";
                $this->text .= "    \tadd x5, x5, :lo12:$id\n";
                $this->text .= "    \tadd x0, x4, x5\n";
                $this->text .= "    \tldr w0, [x0]\n";
                $this->text .= "    \tsxtw x0, w0\n";
                $this->text .= "    \tbl print_int\n";
            } elseif (count($dimensions) == 3) {
                $this->text .= "    \tmov x0, #" . $indices[0] . "\n";
                $this->text .= "    \tlsl x0, x0, #2\n";
                $this->text .= "    \tmov x1, #" . $indices[1] . "\n";
                $this->text .= "    \tlsl x1, x1, #2\n";
                $this->text .= "    \tmov x2, #" . $indices[2] . "\n";
                $this->text .= "    \tlsl x2, x2, #2\n";
                $this->text .= "    \tadrp x3, {$id}_rows\n";
                $this->text .= "    \tadd x3, x3, :lo12:{$id}_rows\n";
                $this->text .= "    \tldr w3, [x3]\n";
                $this->text .= "    \tmul x4, x0, x3\n";
                $this->text .= "    \tadd x4, x4, x1\n";
                $this->text .= "    \tadrp x5, {$id}_cols\n";
                $this->text .= "    \tadd x5, x5, :lo12:{$id}_cols\n";
                $this->text .= "    \tldr w5, [x5]\n";
                $this->text .= "    \tmul x6, x4, x5\n";
                $this->text .= "    \tadd x6, x6, x2\n";
                $this->text .= "    \tadrp x8, $id\n";
                $this->text .= "    \tadd x8, x8, :lo12:$id\n";
                $this->text .= "    \tadd x0, x6, x8\n";
                $this->text .= "    \tldr w0, [x0]\n";
                $this->text .= "    \tsxtw x0, w0\n";
                $this->text .= "    \tbl print_int\n";
            }
        } else {
            fwrite(STDERR, "Error: El arreglo {$id} no está definido\n");
        }
        return null;
    }

    public function visitIndices($ctx)
    {
        $indices = [];
        foreach ($ctx->index() as $idxCtx) {
            $indices[] = $this->visit($idxCtx);
        }
        return $indices;
    }

    public function visitIndex($ctx)
    {
        return intval($ctx->NUM()->getText());
    }

    public function visitEmptyList($ctx)
    {
        return [];
    }

    public function visitElementsList($ctx)
    {
        return $this->visit($ctx->list_elements());
    }

    public function visitValueList($ctx)
    {
        $values = [];
        foreach ($ctx->value() as $valCtx) {
            $values[] = $this->visit($valCtx);
        }
        return $values;
    }

    public function visitValueNum($ctx)
    {
        return intval($ctx->NUM()->getText());
    }

    public function visitValueExpr($ctx)
    {
        return $this->visit($ctx->expression());
    }
}