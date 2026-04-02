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
	 * Visit a parse tree produced by {@see GrammarParser::program()}.
	 *
	 * @param Context\ProgramContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProgram(Context\ProgramContext $context);

	/**
	 * Visit a parse tree produced by the `Assign` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 *
	 * @param Context\AssignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssign(Context\AssignContext $context);

	/**
	 * Visit a parse tree produced by the `Print` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 *
	 * @param Context\PrintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrint(Context\PrintContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::indices()}.
	 *
	 * @param Context\IndicesContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndices(Context\IndicesContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::index()}.
	 *
	 * @param Context\IndexContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIndex(Context\IndexContext $context);

	/**
	 * Visit a parse tree produced by the `EmptyList` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 *
	 * @param Context\EmptyListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEmptyList(Context\EmptyListContext $context);

	/**
	 * Visit a parse tree produced by the `ElementsList` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 *
	 * @param Context\ElementsListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElementsList(Context\ElementsListContext $context);

	/**
	 * Visit a parse tree produced by the `ValueList` labeled alternative
	 * in {@see GrammarParser::list_elements()}.
	 *
	 * @param Context\ValueListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValueList(Context\ValueListContext $context);

	/**
	 * Visit a parse tree produced by the `ValueNum` labeled alternative
	 * in {@see GrammarParser::value()}.
	 *
	 * @param Context\ValueNumContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValueNum(Context\ValueNumContext $context);

	/**
	 * Visit a parse tree produced by the `ValueExpr` labeled alternative
	 * in {@see GrammarParser::value()}.
	 *
	 * @param Context\ValueExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValueExpr(Context\ValueExprContext $context);
}