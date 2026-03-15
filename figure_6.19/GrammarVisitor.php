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
	 * Visit a parse tree produced by the `assignment` labeled alternative
	 * in {@see GrammarParser::stat()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by the `blank` labeled alternative
	 * in {@see GrammarParser::stat()}.
	 *
	 * @param Context\BlankContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBlank(Context\BlankContext $context);

	/**
	 * Visit a parse tree produced by the `MulDiv` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\MulDivContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMulDiv(Context\MulDivContext $context);

	/**
	 * Visit a parse tree produced by the `AddSub` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\AddSubContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAddSub(Context\AddSubContext $context);

	/**
	 * Visit a parse tree produced by the `id` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\IdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitId(Context\IdContext $context);

	/**
	 * Visit a parse tree produced by the `int` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\IntContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInt(Context\IntContext $context);

	/**
	 * Visit a parse tree produced by the `parents` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ParentsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParents(Context\ParentsContext $context);
}