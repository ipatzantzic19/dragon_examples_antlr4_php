<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\AbstractParseTreeVisitor;

/**
 * This class provides an empty implementation of {@see GrammarVisitor},
 * which can be extended to create a visitor which only needs to handle a subset
 * of the available methods.
 */
class GrammarBaseVisitor extends AbstractParseTreeVisitor implements GrammarVisitor
{
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitB(Context\BContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitBp(Context\BpContext $context)
	{
	    return $this->visitChildren($context);
	}
}