<?php

class EvalVisitor extends GrammarBaseVisitor {
    private $count = 0;
    private $map = [];

    // Método para generar nuevas variables temporales (T1, T2, ...)
    private function newTemp() {
        return "T" . ++$this->count;
    }

    public function visitLine($ctx) {
        foreach ($ctx->statement() as $stmt) {
            $this->visit($stmt);
        }
    }

    public function visitAssignment($ctx) {
        $name = $ctx->NAME()->getText();
        $val = $this->visit($ctx->expression());
        $this->map[$name] = $val;
        echo $name . " = " . $val . "\n";
    }

    public function visitVisitPrintExpression($ctx) {
        $this->visit($ctx->expression());
    }

    public function visitVisitAssignment($ctx) {
        return $this->visit($ctx->assignment());
    }

    public function visitAdditionSubtraction($ctx) {
        $left = $this->visit($ctx->expression(0));
        $right = $this->visit($ctx->expression(1));
        $op = $ctx->op->getText();
        $temp = $this->newTemp();
        echo $temp . " = " . $left . " " . $op . " " . $right . "\n";
        return $temp;
    }

    public function visitMultiplicationDivision($ctx) {
        $left = $this->visit($ctx->expression(0));
        $right = $this->visit($ctx->expression(1));
        $op = $ctx->op->getText();
        $temp = $this->newTemp();
        echo $temp . " = " . $left . " " . $op . " " . $right . "\n";
        return $temp;
    }

    public function visitUnaryMinus($ctx) {
        $val = $this->visit($ctx->expression());
        $temp = $this->newTemp();
        echo $temp . " = -" . $val . "\n";
        return $temp;
    }

    public function visitParenthesis($ctx) {
        return $this->visit($ctx->expression());
    }

    public function visitNumber($ctx) {
        return trim($ctx->NUMBER()->getText());
    }

    public function visitIdentifierName($ctx) {
        $name = $ctx->NAME()->getText();
        if (isset($this->map[$name])) {
            return $name;
        }
        echo "Undefined identifier: " . $name . "\n";
        return "0";
    }
}