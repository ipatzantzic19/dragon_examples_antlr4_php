<?php

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

    public function visitProgram(Context\ProgramContext $context)
    {
        foreach ($context->statement() as $statement) {
            $this->visit($statement);
        }

        return null;
    }

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

    public function visitAssignment(Context\AssignmentContext $context)
    {
        $target = $context->ID()->getText();
        $value = $this->visit($context->expr());

        $this->generator->emit("{$target} = {$value}");
        return null;
    }

    public function visitPrintStmt(Context\PrintStmtContext $context)
    {
        $id = $context->ID()->getText();
        $this->generator->emit("print {$id}");

        return null;
    }

    public function visitIfStmt(Context\IfStmtContext $context)
    {
        $conditionTemp = $this->visit($context->condition());
        $trueLabel = $this->generator->newLabel();
        $falseLabel = $this->generator->newLabel();
        $endLabel = $this->generator->newLabel();

        $this->generator->emit("if {$conditionTemp} goto {$trueLabel}");
        $this->generator->emit("goto {$falseLabel}");
        $this->generator->emit("{$trueLabel}:");

        $allStatements = $context->statement();
        $hasElse = $context->ELSE() !== null;

        $thenStatements = $allStatements;
        $elseStatements = [];

        if ($hasElse) {
            $thenStatements = [];
            $elseTokenIndex = $context->ELSE()->getSymbol()->getTokenIndex();

            foreach ($allStatements as $statement) {
                $stopToken = $statement->getStop();
                $stopIndex = $stopToken !== null ? $stopToken->getTokenIndex() : -1;

                if ($stopIndex >= 0 && $stopIndex < $elseTokenIndex) {
                    $thenStatements[] = $statement;
                } else {
                    $elseStatements[] = $statement;
                }
            }
        }

        foreach ($thenStatements as $statement) {
            $this->visit($statement);
        }

        if ($hasElse) {
            $this->generator->emit("goto {$endLabel}");
        }

        $this->generator->emit("{$falseLabel}:");

        if ($hasElse) {
            foreach ($elseStatements as $statement) {
                $this->visit($statement);
            }

            $this->generator->emit("{$endLabel}:");
        }

        return null;
    }

    public function visitCondition(Context\ConditionContext $context)
    {
        $left = $this->visit($context->expr(0));
        $right = $this->visit($context->expr(1));
        $op = $context->relOp()->getText();

        $temp = $this->generator->newTemp();
        $this->generator->emit("{$temp} = {$left} {$op} {$right}");

        return $temp;
    }

    public function visitExprAddSub(Context\ExprAddSubContext $context)
    {
        return $this->emitBinaryExpr($context->expr(0), $context->expr(1), $context->op->getText());
    }

    public function visitExprMulDiv(Context\ExprMulDivContext $context)
    {
        return $this->emitBinaryExpr($context->expr(0), $context->expr(1), $context->op->getText());
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

    private function emitBinaryExpr(Context\ExprContext $leftExpr, Context\ExprContext $rightExpr, string $op): string
    {
        $left = $this->visit($leftExpr);
        $right = $this->visit($rightExpr);

        $temp = $this->generator->newTemp();
        $this->generator->emit("{$temp} = {$left} {$op} {$right}");

        return $temp;
    }
}
