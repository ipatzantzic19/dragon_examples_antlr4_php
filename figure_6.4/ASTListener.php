<?php

use Context\SumresContext;
use Context\MuldivContext;
use Context\NumContext;
use Context\IdContext;

require_once __DIR__ . '/Node.php';

class ASTListener extends GrammarBaseListener
{
    private $id = 0;
    private $stack = [];
    private $history = [];

    private function getNode($label, $left = null, $right = null)
    {
        $signature = $label;
        if ($left !== null && $right !== null) {
            $signature .= '_' . $left->id . '_' . $right->id;
        }

        if (isset($this->history[$signature])) {
            return $this->history[$signature];
        }

        $node = new Node($this->id++, $label, $left, $right);
        $this->history[$signature] = $node;
        return $node;
    }

    public function getResult()
    {
        return end($this->stack);
    }

    public function exitSumres(SumresContext $ctx): void
    {
        $right = array_pop($this->stack);
        $left = array_pop($this->stack);

        $node = $this->getNode($ctx->op->getText(), $left, $right);
        array_push($this->stack, $node);
    }

    public function exitMuldiv(MuldivContext $ctx): void
    {
        $right = array_pop($this->stack);
        $left = array_pop($this->stack);

        $node = $this->getNode($ctx->op->getText(), $left, $right);
        array_push($this->stack, $node);
    }

    public function exitNum(NumContext $ctx): void
    {
        $node = $this->getNode($ctx->getText());
        array_push($this->stack, $node);
    }

    public function exitId(IdContext $ctx): void
    {
        $node = $this->getNode($ctx->getText());
        array_push($this->stack, $node);
    }
}