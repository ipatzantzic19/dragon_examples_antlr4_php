<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GrammarParser}.
 */
interface GrammarVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see GrammarParser::t()}.
	 *
	 * @param Context\TContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitT(Context\TContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::b()}.
	 *
	 * @param Context\BContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitB(Context\BContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::c()}.
	 *
	 * @param Context\CContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitC(Context\CContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::n()}.
	 *
	 * @param Context\NContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitN(Context\NContext $context);
}