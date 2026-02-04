<?php

use Context\DeclContext;
use Context\ListContext;
use Context\TypeContext;

class EvalVisitor extends GrammarBaseVisitor
{
    private $currentType;

    public function visitDecl(DeclContext $ctx)
    {
        $this->currentType = $this->visit($ctx->type());
        return $this->visit($ctx->list());
    }

    public function visitType(TypeContext $ctx)
    {
        $text = $ctx->getText();
        if ($text === 'int') {
            return 'integer';
        } elseif ($text === 'float') {
            return 'float';
        }
        return 'unknown';
    }

    public function visitList(ListContext $ctx)
    {
        foreach ($ctx->ID() as $idToken) {
            $idName = $idToken->getText();
            echo "addType('$idName', '$this->currentType')\n";
        }
        return $this->currentType;
    }
}