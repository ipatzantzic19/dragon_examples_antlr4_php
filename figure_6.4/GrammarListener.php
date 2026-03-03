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
	 * Enter a parse tree produced by the `Sumres`
	 * labeled alternative in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function enterSumres(Context\SumresContext $context): void;
	/**
	 * Exit a parse tree produced by the `Sumres` labeled alternative
	 * in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function exitSumres(Context\SumresContext $context): void;
	/**
	 * Enter a parse tree produced by the `PassT`
	 * labeled alternative in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function enterPassT(Context\PassTContext $context): void;
	/**
	 * Exit a parse tree produced by the `PassT` labeled alternative
	 * in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function exitPassT(Context\PassTContext $context): void;
	/**
	 * Enter a parse tree produced by the `PassF`
	 * labeled alternative in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function enterPassF(Context\PassFContext $context): void;
	/**
	 * Exit a parse tree produced by the `PassF` labeled alternative
	 * in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function exitPassF(Context\PassFContext $context): void;
	/**
	 * Enter a parse tree produced by the `Muldiv`
	 * labeled alternative in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function enterMuldiv(Context\MuldivContext $context): void;
	/**
	 * Exit a parse tree produced by the `Muldiv` labeled alternative
	 * in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function exitMuldiv(Context\MuldivContext $context): void;
	/**
	 * Enter a parse tree produced by the `PassE`
	 * labeled alternative in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function enterPassE(Context\PassEContext $context): void;
	/**
	 * Exit a parse tree produced by the `PassE` labeled alternative
	 * in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function exitPassE(Context\PassEContext $context): void;
	/**
	 * Enter a parse tree produced by the `Id`
	 * labeled alternative in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function enterId(Context\IdContext $context): void;
	/**
	 * Exit a parse tree produced by the `Id` labeled alternative
	 * in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function exitId(Context\IdContext $context): void;
	/**
	 * Enter a parse tree produced by the `Num`
	 * labeled alternative in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function enterNum(Context\NumContext $context): void;
	/**
	 * Exit a parse tree produced by the `Num` labeled alternative
	 * in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function exitNum(Context\NumContext $context): void;
}