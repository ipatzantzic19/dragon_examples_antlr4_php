<?php

use Context\ETContext;
use Context\TFContext;
use Context\SumContext;
use Context\MulContext;
use Context\DigitContext;
use Context\EpsSumContext;
use Context\EpsMulContext;
use Context\BraceContext;

require_once __DIR__ . '/Node.php';

class ASTListener extends GrammarBaseListener
{
    private $id = 0;
    private $stack = [];

    public function getResult()
    {
        return end($this->stack) ?: null;
    }

    public function exitDigit(DigitContext $ctx): void
    {
        $node = new Node($this->id++, $ctx->getText());
        array_push($this->stack, $node);
    }

    public function exitEpsSum(EpsSumContext $ctx): void
    {
        array_push($this->stack, null);
    }

    public function exitEpsMul(EpsMulContext $ctx): void
    {
        array_push($this->stack, null);
    }

    public function exitSum(SumContext $ctx): void
    {
        $right = array_pop($this->stack);
        $left = array_pop($this->stack);
        $node = new Node($this->id++, '+', $left, $right);
        array_push($this->stack, $node);
    }

    public function exitMul(MulContext $ctx): void
    {
        $right = array_pop($this->stack);
        $left = array_pop($this->stack);
        $node = new Node($this->id++, '*', $left, $right);
        array_push($this->stack, $node);
    }

    public function exitET(ETContext $ctx): void
    {
        $right = array_pop($this->stack);
        $left = array_pop($this->stack);

        if ($right === null) {
            array_push($this->stack, $left);
        } else {
            // This is tricky, the right side is already a complete subtree
            // We need to find the leftmost leaf to attach the left side.
            // For 1+2*3, left is 1, right is (+ 2 (* 3))
            // To make it left associative, we need to restructure the tree.
            // But the grammar is right-associative, so we build a right-associative tree.
            // We pop the left side of the right's operation, and make it our new left.
            $new_left = $right->left;
            $right->left = $left;
            $node = new Node($right->id, $right->label, $right->left, $new_left);
            array_push($this->stack, $node);
        }
    }

    public function exitTF(TFContext $ctx): void
    {
        $right = array_pop($this->stack);
        $left = array_pop($this->stack);

        if ($right === null) {
            array_push($this->stack, $left);
        } else {
            $new_left = $right->left;
            $right->left = $left;
            $node = new Node($right->id, $right->label, $right->left, $new_left);
            array_push($this->stack, $node);
        }
    }
}