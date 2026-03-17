<?php
// figure-6-15 > EvalVisitor.php

use Context\T_ruleContext;
use Context\B_intContext;
use Context\B_floatContext;
use Context\C_arrayContext;
use Context\C_emptyContext;

class EvalVisitor extends GrammarBaseListener
{
    private $inherited_type = '';
    private $inherited_width = 0;
    private $c_attrs = [];

    private function setCAttrs($ctx, array $attrs): void
    {
        $this->c_attrs[spl_object_id($ctx)] = $attrs;
    }

    private function getCAttrs($ctx): array
    {
        return $this->c_attrs[spl_object_id($ctx)] ?? ['type' => '', 'width' => 0];
    }

    public function exitT_rule(T_ruleContext $ctx): void
    {
        $_c_attrs = $this->getCAttrs($ctx->c());

        echo "type = " . $_c_attrs['type'] . "\nwidth = " . $_c_attrs['width'] . "\n";
    }

    public function exitB_int(B_intContext $ctx): void
    {
        $this->inherited_type = 'integer';
        $this->inherited_width = 4;
    }

    public function exitB_float(B_floatContext $ctx): void
    {
        $this->inherited_type = 'float';
        $this->inherited_width = 8;
    }

    public function exitC_array(C_arrayContext $ctx): void
    {
        $num_val = (int) $ctx->NUMBER()->getText();
        $_c1_attrs = $this->getCAttrs($ctx->c());

        $this->setCAttrs($ctx, [
            'type' => "array(" . $num_val . ", " . $_c1_attrs['type'] . ")",
            'width' => $num_val * $_c1_attrs['width']
        ]);
    }

    public function exitC_empty(C_emptyContext $ctx): void
    {
        $this->setCAttrs($ctx, [
            'type' => $this->inherited_type,
            'width' => $this->inherited_width
        ]);
    }
}