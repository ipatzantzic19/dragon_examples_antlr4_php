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
	 * Enter a parse tree produced by the `Assign`
	 * labeled alternative in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterAssign(Context\AssignContext $context): void;
	/**
	 * Exit a parse tree produced by the `Assign` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitAssign(Context\AssignContext $context): void;
	/**
	 * Enter a parse tree produced by the `Print`
	 * labeled alternative in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterPrint(Context\PrintContext $context): void;
	/**
	 * Exit a parse tree produced by the `Print` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitPrint(Context\PrintContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::indices()}.
	 * @param $context The parse tree.
	 */
	public function enterIndices(Context\IndicesContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::indices()}.
	 * @param $context The parse tree.
	 */
	public function exitIndices(Context\IndicesContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::index()}.
	 * @param $context The parse tree.
	 */
	public function enterIndex(Context\IndexContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::index()}.
	 * @param $context The parse tree.
	 */
	public function exitIndex(Context\IndexContext $context): void;
	/**
	 * Enter a parse tree produced by the `EmptyList`
	 * labeled alternative in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterEmptyList(Context\EmptyListContext $context): void;
	/**
	 * Exit a parse tree produced by the `EmptyList` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitEmptyList(Context\EmptyListContext $context): void;
	/**
	 * Enter a parse tree produced by the `ElementsList`
	 * labeled alternative in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterElementsList(Context\ElementsListContext $context): void;
	/**
	 * Exit a parse tree produced by the `ElementsList` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitElementsList(Context\ElementsListContext $context): void;
	/**
	 * Enter a parse tree produced by the `ValueList`
	 * labeled alternative in {@see GrammarParser::list_elements()}.
	 * @param $context The parse tree.
	 */
	public function enterValueList(Context\ValueListContext $context): void;
	/**
	 * Exit a parse tree produced by the `ValueList` labeled alternative
	 * in {@see GrammarParser::list_elements()}.
	 * @param $context The parse tree.
	 */
	public function exitValueList(Context\ValueListContext $context): void;
	/**
	 * Enter a parse tree produced by the `ValueNum`
	 * labeled alternative in {@see GrammarParser::value()}.
	 * @param $context The parse tree.
	 */
	public function enterValueNum(Context\ValueNumContext $context): void;
	/**
	 * Exit a parse tree produced by the `ValueNum` labeled alternative
	 * in {@see GrammarParser::value()}.
	 * @param $context The parse tree.
	 */
	public function exitValueNum(Context\ValueNumContext $context): void;
	/**
	 * Enter a parse tree produced by the `ValueExpr`
	 * labeled alternative in {@see GrammarParser::value()}.
	 * @param $context The parse tree.
	 */
	public function enterValueExpr(Context\ValueExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `ValueExpr` labeled alternative
	 * in {@see GrammarParser::value()}.
	 * @param $context The parse tree.
	 */
	public function exitValueExpr(Context\ValueExprContext $context): void;
}