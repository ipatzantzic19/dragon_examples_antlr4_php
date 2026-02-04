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
	 * Visit a parse tree produced by the `ET` labeled alternative
	 * in {@see GrammarParser::e()}.
	 *
	 * @param Context\ETContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitET(Context\ETContext $context);

	/**
	 * Visit a parse tree produced by the `Sum` labeled alternative
	 * in {@see GrammarParser::ep()}.
	 *
	 * @param Context\SumContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSum(Context\SumContext $context);

	/**
	 * Visit a parse tree produced by the `EpsSum` labeled alternative
	 * in {@see GrammarParser::ep()}.
	 *
	 * @param Context\EpsSumContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEpsSum(Context\EpsSumContext $context);

	/**
	 * Visit a parse tree produced by the `TF` labeled alternative
	 * in {@see GrammarParser::t()}.
	 *
	 * @param Context\TFContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTF(Context\TFContext $context);

	/**
	 * Visit a parse tree produced by the `Mul` labeled alternative
	 * in {@see GrammarParser::tp()}.
	 *
	 * @param Context\MulContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMul(Context\MulContext $context);

	/**
	 * Visit a parse tree produced by the `EpsMul` labeled alternative
	 * in {@see GrammarParser::tp()}.
	 *
	 * @param Context\EpsMulContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEpsMul(Context\EpsMulContext $context);

	/**
	 * Visit a parse tree produced by the `Brace` labeled alternative
	 * in {@see GrammarParser::f()}.
	 *
	 * @param Context\BraceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBrace(Context\BraceContext $context);

	/**
	 * Visit a parse tree produced by the `Digit` labeled alternative
	 * in {@see GrammarParser::f()}.
	 *
	 * @param Context\DigitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDigit(Context\DigitContext $context);
}