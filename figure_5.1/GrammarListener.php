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
	 * Enter a parse tree produced by the `Add`
	 * labeled alternative in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function enterAdd(Context\AddContext $context): void;
	/**
	 * Exit a parse tree produced by the `Add` labeled alternative
	 * in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function exitAdd(Context\AddContext $context): void;
	/**
	 * Enter a parse tree produced by the `Pat`
	 * labeled alternative in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function enterPat(Context\PatContext $context): void;
	/**
	 * Exit a parse tree produced by the `Pat` labeled alternative
	 * in {@see GrammarParser::e()}.
	 * @param $context The parse tree.
	 */
	public function exitPat(Context\PatContext $context): void;
	/**
	 * Enter a parse tree produced by the `Paf`
	 * labeled alternative in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function enterPaf(Context\PafContext $context): void;
	/**
	 * Exit a parse tree produced by the `Paf` labeled alternative
	 * in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function exitPaf(Context\PafContext $context): void;
	/**
	 * Enter a parse tree produced by the `Mul`
	 * labeled alternative in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function enterMul(Context\MulContext $context): void;
	/**
	 * Exit a parse tree produced by the `Mul` labeled alternative
	 * in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function exitMul(Context\MulContext $context): void;
	/**
	 * Enter a parse tree produced by the `Par`
	 * labeled alternative in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function enterPar(Context\ParContext $context): void;
	/**
	 * Exit a parse tree produced by the `Par` labeled alternative
	 * in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function exitPar(Context\ParContext $context): void;
	/**
	 * Enter a parse tree produced by the `Int`
	 * labeled alternative in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function enterInt(Context\IntContext $context): void;
	/**
	 * Exit a parse tree produced by the `Int` labeled alternative
	 * in {@see GrammarParser::f()}.
	 * @param $context The parse tree.
	 */
	public function exitInt(Context\IntContext $context): void;
}