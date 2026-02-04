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
	 * Visit a parse tree produced by {@see GrammarParser::l()}.
	 *
	 * @param Context\LContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitL(Context\LContext $context);

	/**
	 * Visit a parse tree produced by the `Add` labeled alternative
	 * in {@see GrammarParser::e()}.
	 *
	 * @param Context\AddContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdd(Context\AddContext $context);

	/**
	 * Visit a parse tree produced by the `Pat` labeled alternative
	 * in {@see GrammarParser::e()}.
	 *
	 * @param Context\PatContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPat(Context\PatContext $context);

	/**
	 * Visit a parse tree produced by the `Paf` labeled alternative
	 * in {@see GrammarParser::t()}.
	 *
	 * @param Context\PafContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPaf(Context\PafContext $context);

	/**
	 * Visit a parse tree produced by the `Mul` labeled alternative
	 * in {@see GrammarParser::t()}.
	 *
	 * @param Context\MulContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMul(Context\MulContext $context);

	/**
	 * Visit a parse tree produced by the `Par` labeled alternative
	 * in {@see GrammarParser::f()}.
	 *
	 * @param Context\ParContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPar(Context\ParContext $context);

	/**
	 * Visit a parse tree produced by the `Int` labeled alternative
	 * in {@see GrammarParser::f()}.
	 *
	 * @param Context\IntContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInt(Context\IntContext $context);
}