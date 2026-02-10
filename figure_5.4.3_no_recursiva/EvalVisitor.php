<?php

use Context\BContext;
use Context\BpContext;

class EvalVisitor extends GrammarBaseVisitor
{
    public function visitB(BContext $context)
    {
        $binaryString = '1' . $this->visit($context->bp());
        return bindec($binaryString);
    }

    public function visitBp(BpContext $context)
    {
        if ($context->getChildCount() === 0) {
            return '';
        }

        $bit = $context->getChild(0)->getText();
        $rest = $this->visit($context->bp());
        
        return $bit . $rest;
    }
}
