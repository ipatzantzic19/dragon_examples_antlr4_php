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
	 * Enter a parse tree produced by {@see GrammarParser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by the `assignment`
	 * labeled alternative in {@see GrammarParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment(Context\AssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by the `assignment` labeled alternative
	 * in {@see GrammarParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment(Context\AssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by the `blank`
	 * labeled alternative in {@see GrammarParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function enterBlank(Context\BlankContext $context): void;
	/**
	 * Exit a parse tree produced by the `blank` labeled alternative
	 * in {@see GrammarParser::stat()}.
	 * @param $context The parse tree.
	 */
	public function exitBlank(Context\BlankContext $context): void;
	/**
	 * Enter a parse tree produced by the `MulDiv`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterMulDiv(Context\MulDivContext $context): void;
	/**
	 * Exit a parse tree produced by the `MulDiv` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitMulDiv(Context\MulDivContext $context): void;
	/**
	 * Enter a parse tree produced by the `AddSub`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterAddSub(Context\AddSubContext $context): void;
	/**
	 * Exit a parse tree produced by the `AddSub` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitAddSub(Context\AddSubContext $context): void;
	/**
	 * Enter a parse tree produced by the `id`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterId(Context\IdContext $context): void;
	/**
	 * Exit a parse tree produced by the `id` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitId(Context\IdContext $context): void;
	/**
	 * Enter a parse tree produced by the `int`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterInt(Context\IntContext $context): void;
	/**
	 * Exit a parse tree produced by the `int` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitInt(Context\IntContext $context): void;
	/**
	 * Enter a parse tree produced by the `parents`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterParents(Context\ParentsContext $context): void;
	/**
	 * Exit a parse tree produced by the `parents` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitParents(Context\ParentsContext $context): void;
}