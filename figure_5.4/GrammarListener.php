<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GrammarParser}.
 */
interface GrammarListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GrammarParser::l()}.
	 * @param $context The parse tree.
	 */
	public function enterL(Context\LContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::l()}.
	 * @param $context The parse tree.
	 */
	public function exitL(Context\LContext $context): void;
	/**
	 * Enter a parse tree produced by the `ET`
	 * labeled alternative in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function enterET(Context\ETContext $context): void;
	/**
	 * Exit a parse tree produced by the `ET` labeled alternative
	 * in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function exitET(Context\ETContext $context): void;
	/**
	 * Enter a parse tree produced by the `Sum`
	 * labeled alternative in {@see GrammarParser::ep()}.
	 * @param $context The parse tree.
	 */
	public function enterSum(Context\SumContext $context): void;
	/**
	 * Exit a parse tree produced by the `Sum` labeled alternative
	 * in {@see GrammarParser::ep()}.
	 * @param $context The parse tree.
	 */
	public function exitSum(Context\SumContext $context): void;
	/**
	 * Enter a parse tree produced by the `EpsSum`
	 * labeled alternative in {@see GrammarParser::ep()}.
	 * @param $context The parse tree.
	 */
	public function enterEpsSum(Context\EpsSumContext $context): void;
	/**
	 * Exit a parse tree produced by the `EpsSum` labeled alternative
	 * in {@see GrammarParser::ep()}.
	 * @param $context The parse tree.
	 */
	public function exitEpsSum(Context\EpsSumContext $context): void;
	/**
	 * Enter a parse tree produced by the `TF`
	 * labeled alternative in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function enterTF(Context\TFContext $context): void;
	/**
	 * Exit a parse tree produced by the `TF` labeled alternative
	 * in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function exitTF(Context\TFContext $context): void;
	/**
	 * Enter a parse tree produced by the `Mul`
	 * labeled alternative in {@see GrammarParser::tp()}.
	 * @param $context The parse tree.
	 */
	public function enterMul(Context\MulContext $context): void;
	/**
	 * Exit a parse tree produced by the `Mul` labeled alternative
	 * in {@see GrammarParser::tp()}.
	 * @param $context The parse tree.
	 */
	public function exitMul(Context\MulContext $context): void;
	/**
	 * Enter a parse tree produced by the `EpsMul`
	 * labeled alternative in {@see GrammarParser::tp()}.
	 * @param $context The parse tree.
	 */
	public function enterEpsMul(Context\EpsMulContext $context): void;
	/**
	 * Exit a parse tree produced by the `EpsMul` labeled alternative
	 * in {@see GrammarParser::tp()}.
	 * @param $context The parse tree.
	 */
	public function exitEpsMul(Context\EpsMulContext $context): void;
	/**
	 * Enter a parse tree produced by the `Brace`
	 * labeled alternative in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function enterBrace(Context\BraceContext $context): void;
	/**
	 * Exit a parse tree produced by the `Brace` labeled alternative
	 * in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function exitBrace(Context\BraceContext $context): void;
	/**
	 * Enter a parse tree produced by the `Digit`
	 * labeled alternative in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function enterDigit(Context\DigitContext $context): void;
	/**
	 * Exit a parse tree produced by the `Digit` labeled alternative
	 * in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function exitDigit(Context\DigitContext $context): void;
}