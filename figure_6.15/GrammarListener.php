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
	 * Enter a parse tree produced by the `T_rule`
	 * labeled alternative in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function enterT_rule(Context\T_ruleContext $context): void;
	/**
	 * Exit a parse tree produced by the `T_rule` labeled alternative
	 * in {@see GrammarParser::t()}.
	 * @param $context The parse tree.
	 */
	public function exitT_rule(Context\T_ruleContext $context): void;
	/**
	 * Enter a parse tree produced by the `B_int`
	 * labeled alternative in {@see GrammarParser::b()}.
	 * @param $context The parse tree.
	 */
	public function enterB_int(Context\B_intContext $context): void;
	/**
	 * Exit a parse tree produced by the `B_int` labeled alternative
	 * in {@see GrammarParser::b()}.
	 * @param $context The parse tree.
	 */
	public function exitB_int(Context\B_intContext $context): void;
	/**
	 * Enter a parse tree produced by the `B_float`
	 * labeled alternative in {@see GrammarParser::b()}.
	 * @param $context The parse tree.
	 */
	public function enterB_float(Context\B_floatContext $context): void;
	/**
	 * Exit a parse tree produced by the `B_float` labeled alternative
	 * in {@see GrammarParser::b()}.
	 * @param $context The parse tree.
	 */
	public function exitB_float(Context\B_floatContext $context): void;
	/**
	 * Enter a parse tree produced by the `C_array`
	 * labeled alternative in {@see GrammarParser::c()}.
	 * @param $context The parse tree.
	 */
	public function enterC_array(Context\C_arrayContext $context): void;
	/**
	 * Exit a parse tree produced by the `C_array` labeled alternative
	 * in {@see GrammarParser::c()}.
	 * @param $context The parse tree.
	 */
	public function exitC_array(Context\C_arrayContext $context): void;
	/**
	 * Enter a parse tree produced by the `C_empty`
	 * labeled alternative in {@see GrammarParser::c()}.
	 * @param $context The parse tree.
	 */
	public function enterC_empty(Context\C_emptyContext $context): void;
	/**
	 * Exit a parse tree produced by the `C_empty` labeled alternative
	 * in {@see GrammarParser::c()}.
	 * @param $context The parse tree.
	 */
	public function exitC_empty(Context\C_emptyContext $context): void;
}