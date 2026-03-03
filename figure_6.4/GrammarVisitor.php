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
	 * Visit a parse tree produced by the `Sumres` labeled alternative
	 * in {@see GrammarParser::e()}.
	 *
	 * @param Context\SumresContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSumres(Context\SumresContext $context);

	/**
	 * Visit a parse tree produced by the `PassT` labeled alternative
	 * in {@see GrammarParser::e()}.
	 *
	 * @param Context\PassTContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPassT(Context\PassTContext $context);

	/**
	 * Visit a parse tree produced by the `PassF` labeled alternative
	 * in {@see GrammarParser::t()}.
	 *
	 * @param Context\PassFContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPassF(Context\PassFContext $context);

	/**
	 * Visit a parse tree produced by the `Muldiv` labeled alternative
	 * in {@see GrammarParser::t()}.
	 *
	 * @param Context\MuldivContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMuldiv(Context\MuldivContext $context);

	/**
	 * Visit a parse tree produced by the `PassE` labeled alternative
	 * in {@see GrammarParser::f()}.
	 *
	 * @param Context\PassEContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPassE(Context\PassEContext $context);

	/**
	 * Visit a parse tree produced by the `Id` labeled alternative
	 * in {@see GrammarParser::f()}.
	 *
	 * @param Context\IdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitId(Context\IdContext $context);

	/**
	 * Visit a parse tree produced by the `Num` labeled alternative
	 * in {@see GrammarParser::f()}.
	 *
	 * @param Context\NumContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNum(Context\NumContext $context);
}