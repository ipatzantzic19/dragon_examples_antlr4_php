<?php

/**
 * C3DVisitor.php
 * Visitor que recorre el AST generado por ANTLR4 y emite C3D.
 *
 * NOVEDADES vs Tarea 2:
 *  - Condiciones con &&  y  || usando cortocircuito (short-circuit evaluation)
 *  - print acepta STRING literal además de ID
 *  - ifStmt sin paréntesis obligatorios alrededor de la condición
 *
 * OLC2 - Tarea 3 | Universidad San Carlos de Guatemala
 */

class C3DVisitor extends GrammarBaseVisitor
{
    private C3DGenerator $generator;

    public function __construct()
    {
        $this->generator = new C3DGenerator();
    }

    public function getGenerator(): C3DGenerator
    {
        return $this->generator;
    }

    // ----------------------------------------------------------------
    // program
    // ----------------------------------------------------------------

    public function visitProgram(Context\ProgramContext $context)
    {
        foreach ($context->statement() as $statement) {
            $this->visit($statement);
        }
        return null;
    }

    // ----------------------------------------------------------------
    // statement dispatchers
    // ----------------------------------------------------------------

    public function visitStmtAssign(Context\StmtAssignContext $context)
    {
        return $this->visit($context->assignment());
    }

    public function visitStmtPrint(Context\StmtPrintContext $context)
    {
        return $this->visit($context->printStmt());
    }

    public function visitStmtIf(Context\StmtIfContext $context)
    {
        return $this->visit($context->ifStmt());
    }

    // ----------------------------------------------------------------
    // assignment
    // ----------------------------------------------------------------

    public function visitAssignment(Context\AssignmentContext $context)
    {
        $target = $context->ID()->getText();
        $value  = $this->visit($context->expr());
        $this->generator->emit("{$target} = {$value}");
        return null;
    }

    // ----------------------------------------------------------------
    // printStmt  – acepta ID o STRING
    // ----------------------------------------------------------------

    public function visitPrintStmt(Context\PrintStmtContext $context)
    {
        if ($context->STRING() !== null) {
            $value = $context->STRING()->getText(); // incluye las comillas: "Verdadero"
        } else {
            $value = $context->ID()->getText();
        }
        $this->generator->emit("print {$value}");
        return null;
    }

    // ----------------------------------------------------------------
    // ifStmt  – genera etiquetas y delega la condición con cortocircuito
    // ----------------------------------------------------------------

    public function visitIfStmt(Context\IfStmtContext $context)
    {
        $trueLabel  = $this->generator->newLabel(); // bloque verdadero
        $falseLabel = $this->generator->newLabel(); // bloque falso / else
        $endLabel   = $this->generator->newLabel(); // punto de reunión

        // Evalúa la condición con cortocircuito, usando las etiquetas destino
        $this->visitConditionWithLabels(
            $context->condition(),
            $trueLabel,
            $falseLabel
        );

        // --- Bloque VERDADERO ---
        $this->generator->emit("{$trueLabel}:");

        $allStmts = $context->statement();
        $hasElse  = $context->ELSE() !== null;

        if ($hasElse) {
            // Separa then-statements de else-statements por posición del token ELSE
            $elseIndex     = $context->ELSE()->getSymbol()->getTokenIndex();
            $thenStmts     = [];
            $elseStmts     = [];

            foreach ($allStmts as $stmt) {
                $stop = $stmt->getStop();
                if ($stop !== null && $stop->getTokenIndex() < $elseIndex) {
                    $thenStmts[] = $stmt;
                } else {
                    $elseStmts[] = $stmt;
                }
            }
        } else {
            $thenStmts = $allStmts;
            $elseStmts = [];
        }

        foreach ($thenStmts as $stmt) {
            $this->visit($stmt);
        }

        if ($hasElse) {
            $this->generator->emit("goto {$endLabel}");
        }

        // --- Bloque FALSO (else) ---
        $this->generator->emit("{$falseLabel}:");

        foreach ($elseStmts as $stmt) {
            $this->visit($stmt);
        }

        if ($hasElse) {
            $this->generator->emit("{$endLabel}:");
        }

        return null;
    }

    // ----------------------------------------------------------------
    // visitConditionWithLabels
    //
    // Implementa la evaluación de cortocircuito pasando las etiquetas
    // de destino (trueLabel / falseLabel) a cada sub-condición.
    //
    //  &&  → si el lado izquierdo es FALSO, cortocircuito hacia falseLabel
    //  ||  → si el lado izquierdo es VERDADERO, cortocircuito hacia trueLabel
    // ----------------------------------------------------------------

    private function visitConditionWithLabels(
        $condition,
        string $trueLabel,
        string $falseLabel
    ): void {
        // ---- AND con cortocircuito ----
        if ($condition instanceof Context\CondAndContext) {
            /*
             * Semántica:
             *   evaluar LEFT
             *   si LEFT es falso → goto falseLabel   (cortocircuito)
             *   [midLabel:]
             *   evaluar RIGHT
             *   si RIGHT es verdadero → goto trueLabel
             *   goto falseLabel
             */
            $midLabel = $this->generator->newLabel();

            // Lado izquierdo: si falla va directo a false; si pasa va a midLabel
            $this->visitConditionWithLabels($condition->condition(0), $midLabel, $falseLabel);

            $this->generator->emit("{$midLabel}:");

            // Lado derecho: resultado final
            $this->visitConditionWithLabels($condition->condition(1), $trueLabel, $falseLabel);

        // ---- OR con cortocircuito ----
        } elseif ($condition instanceof Context\CondOrContext) {
            /*
             * Semántica:
             *   evaluar LEFT
             *   si LEFT es verdadero → goto trueLabel  (cortocircuito)
             *   [midLabel:]
             *   evaluar RIGHT
             *   si RIGHT es verdadero → goto trueLabel
             *   goto falseLabel
             */
            $midLabel = $this->generator->newLabel();

            // Lado izquierdo: si pasa va directo a true; si falla va a midLabel
            $this->visitConditionWithLabels($condition->condition(0), $trueLabel, $midLabel);

            $this->generator->emit("{$midLabel}:");

            // Lado derecho: resultado final
            $this->visitConditionWithLabels($condition->condition(1), $trueLabel, $falseLabel);

        // ---- Condición entre paréntesis ----
        } elseif ($condition instanceof Context\CondParenContext) {
            $this->visitConditionWithLabels($condition->condition(), $trueLabel, $falseLabel);

        // ---- Comparación relacional  expr relOp expr ----
        } elseif ($condition instanceof Context\CondRelOpContext) {
            $left  = $this->visit($condition->expr(0));
            $right = $this->visit($condition->expr(1));
            $op    = $condition->relOp()->getText();

            $temp = $this->generator->newTemp();
            $this->generator->emit("{$temp} = {$left} {$op} {$right}");
            $this->generator->emit("if {$temp} goto {$trueLabel}");
            $this->generator->emit("goto {$falseLabel}");
        }
    }

    // ----------------------------------------------------------------
    // expr
    // ----------------------------------------------------------------

    public function visitExprAddSub(Context\ExprAddSubContext $context)
    {
        return $this->emitBinaryExpr(
            $context->expr(0),
            $context->expr(1),
            $context->op->getText()
        );
    }

    public function visitExprMulDiv(Context\ExprMulDivContext $context)
    {
        return $this->emitBinaryExpr(
            $context->expr(0),
            $context->expr(1),
            $context->op->getText()
        );
    }

    public function visitExprParen(Context\ExprParenContext $context)
    {
        return $this->visit($context->expr());
    }

    public function visitExprNumber(Context\ExprNumberContext $context)
    {
        return $context->NUMBER()->getText();
    }

    public function visitExprId(Context\ExprIdContext $context)
    {
        return $context->ID()->getText();
    }

    // ----------------------------------------------------------------
    // Helpers
    // ----------------------------------------------------------------

    private function emitBinaryExpr(
        Context\ExprContext $leftCtx,
        Context\ExprContext $rightCtx,
        string $op
    ): string {
        $left  = $this->visit($leftCtx);
        $right = $this->visit($rightCtx);

        $temp = $this->generator->newTemp();
        $this->generator->emit("{$temp} = {$left} {$op} {$right}");

        return $temp;
    }
}