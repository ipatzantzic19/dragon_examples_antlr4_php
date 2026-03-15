<?php

class Attr {
    public ?string $AddrNUM = null;
    public ?string $AddrID = null;
    public ?string $Code = null;
}

class SymbolTable {
    private array $IDS = [];

    public function insert(string $name): void {
        $this->IDS[$name] = true;
    }

    public function exists(string $name): bool {
        return isset($this->IDS[$name]);
    }
}

class Translator extends GrammarBaseVisitor {
    public int $TID = 0;
    public string $Data = ".global _start\n\n.data\n";
    public string $Code = "\n.text\n_start:\n";

    private SymbolTable $symbolTable;

    public function __construct() {
        $this->symbolTable = new SymbolTable();
    }

    public function isNUM(Attr $attr): bool {
        return $attr->AddrNUM !== null && $attr->AddrID === null;
    }

    public function visitProgram(Context\ProgramContext $context) {
        foreach ($context->stat() as $statContext) {
            $this->visit($statContext);
        }

        $this->Code .= "\tmov X8, #93\n\tsvc #0\n";
        $attr = new Attr();
        $attr->Code = $this->Data . $this->Code;
        return $attr;
    }

    public function visitAssignment(Context\AssignmentContext $context) {
        $id = $context->ID()->getText();
        $expr = $this->visit($context->expr());

        if ($this->isNUM($expr)) {
            if ($this->symbolTable->exists($id)) {
                $this->Code .= "\tldr X0, =" . $id . "\n";
                $this->Code .= "\tmov X1, #" . $expr->AddrNUM . "\n";
                $this->Code .= "\tstr X1, [X0]\n\n";
            } else {
                $this->Data .= $id . ": .word " . $expr->AddrNUM . "\n";
                $this->symbolTable->insert($id);
            }
        } else {
            if ($this->symbolTable->exists($id)) {
                $this->Code .= "\tldr X0, =" . $id . "\n";
                $this->Code .= "\tldr X1, =" . $expr->AddrID . "\n";
                $this->Code .= "\tldr X2, [X1]\n";
                $this->Code .= "\tstr X2, [X0]\n\n";
            } else {
                $this->Data .= $id . ": .word 0\n";
                $this->Code .= "\tldr X0, =" . $id . "\n";
                $this->Code .= "\tldr X1, =" . $expr->AddrID . "\n";
                $this->Code .= "\tldr X2, [X1]\n";
                $this->Code .= "\tstr X2, [X0]\n\n";
                $this->symbolTable->insert($id);
            }
        }

        return new Attr();
    }

    public function visitAddSub(Context\AddSubContext $context) {
        $left = $this->visit($context->expr(0));
        $right = $this->visit($context->expr(1));

        $this->TID++;
        $addr = "t" . $this->TID;
        $this->Data .= $addr . ": .word 0\n";

        $this->Code .= "\tldr X0, =" . $addr . "\n";

        $opText = $context->op->getText();
        $op = ($opText === "+") ? "add" : "sub";

        if ($this->isNUM($left)) {
            if ($this->isNUM($right)) {
                $this->Code .= "\tmov X1, #" . $left->AddrNUM . "\n";
                $this->Code .= "\t" . $op . " X1, X1, #" . $right->AddrNUM . "\n";
                $this->Code .= "\tstr X1, [X0]\n";
            } else {
                $this->Code .= "\tmov X1, #" . $left->AddrNUM . "\n";
                $this->Code .= "\tldr X2, =" . $right->AddrID . "\n";
                $this->Code .= "\tldr X3, [X2]\n";
                $this->Code .= "\t" . $op . " X1, X1, X3\n";
                $this->Code .= "\tstr X1, [X0]\n";
            }
        } else {
            if ($this->isNUM($right)) {
                $this->Code .= "\tldr X1, =" . $left->AddrID . "\n";
                $this->Code .= "\tldr X1, [X1]\n";
                $this->Code .= "\t" . $op . " X1, X1, #" . $right->AddrNUM . "\n";
                $this->Code .= "\tstr X1, [X0]\n";
            } else {
                $this->Code .= "\tldr X1, =" . $left->AddrID . "\n";
                $this->Code .= "\tldr X2, [X1]\n";
                $this->Code .= "\tldr X3, =" . $right->AddrID . "\n";
                $this->Code .= "\tldr X4, [X3]\n";
                $this->Code .= "\t" . $op . " X2, X2, X4\n";
                $this->Code .= "\tstr X2, [X0]\n";
            }
        }

        $this->Code .= "\n";
        $attr = new Attr();
        $attr->AddrID = $addr;
        return $attr;
    }

    public function visitMulDiv(Context\MulDivContext $context) {
        $left = $this->visit($context->expr(0));
        $right = $this->visit($context->expr(1));

        $this->TID++;
        $addr = "t" . $this->TID;
        $this->Data .= $addr . ": .word 0\n";

        $this->Code .= "\tldr X0, =" . $addr . "\n";

        $opText = $context->op->getText();
        $op = ($opText === "*") ? "mul" : "sdiv";

        if ($this->isNUM($left)) {
            if ($this->isNUM($right)) {
                $this->Code .= "\tmov X1, #" . $left->AddrNUM . "\n";
                $this->Code .= "\tmov X2, #" . $right->AddrNUM . "\n";
                $this->Code .= "\t" . $op . " X1, X1, X2\n";
                $this->Code .= "\tstr X1, [X0]\n";
            } else {
                $this->Code .= "\tmov X1, #" . $left->AddrNUM . "\n";
                $this->Code .= "\tldr X2, =" . $right->AddrID . "\n";
                $this->Code .= "\tldr X3, [X2]\n";
                $this->Code .= "\t" . $op . " X1, X1, X3\n";
                $this->Code .= "\tstr X1, [X0]\n";
            }
        } else {
            if ($this->isNUM($right)) {
                $this->Code .= "\tldr X1, =" . $left->AddrID . "\n";
                $this->Code .= "\tldr X2, [X1]\n";
                $this->Code .= "\tmov X3, #" . $right->AddrNUM . "\n";
                $this->Code .= "\t" . $op . " X2, X2, X3\n";
                $this->Code .= "\tstr X2, [X0]\n";
            } else {
                $this->Code .= "\tldr X1, =" . $left->AddrID . "\n";
                $this->Code .= "\tldr X2, [X1]\n";
                $this->Code .= "\tldr X3, =" . $right->AddrID . "\n";
                $this->Code .= "\tldr X4, [X3]\n";
                $this->Code .= "\t" . $op . " X2, X2, X4\n";
                $this->Code .= "\tstr X2, [X0]\n";
            }
        }

        $this->Code .= "\n";
        $attr = new Attr();
        $attr->AddrID = $addr;
        return $attr;
    }

    public function visitParents(Context\ParentsContext $context) {
        return $this->visit($context->expr());
    }

    public function visitId(Context\IdContext $context) {
        $id = $context->ID()->getText();
        $attr = new Attr();
        $attr->AddrID = $id;
        return $attr;
    }

    public function visitInt(Context\IntContext $context) {
        $num = $context->INT()->getText();
        $attr = new Attr();
        $attr->AddrNUM = $num;
        return $attr;
    }
}
