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
	 * Visit a parse tree produced by the `StmtAssign` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 *
	 * @param Context\StmtAssignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtAssign(Context\StmtAssignContext $context);

	/**
	 * Visit a parse tree produced by the `StmtPrint` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 *
	 * @param Context\StmtPrintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtPrint(Context\StmtPrintContext $context);

	/**
	 * Visit a parse tree produced by the `StmtIf` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 *
	 * @param Context\StmtIfContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStmtIf(Context\StmtIfContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::assignment()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::printStmt()}.
	 *
	 * @param Context\PrintStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPrintStmt(Context\PrintStmtContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::ifStmt()}.
	 *
	 * @param Context\IfStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIfStmt(Context\IfStmtContext $context);

	/**
	 * Visit a parse tree produced by the `CondOr` labeled alternative
	 * in {@see GrammarParser::condition()}.
	 *
	 * @param Context\CondOrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondOr(Context\CondOrContext $context);

	/**
	 * Visit a parse tree produced by the `CondAnd` labeled alternative
	 * in {@see GrammarParser::condition()}.
	 *
	 * @param Context\CondAndContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondAnd(Context\CondAndContext $context);

	/**
	 * Visit a parse tree produced by the `CondRelOp` labeled alternative
	 * in {@see GrammarParser::condition()}.
	 *
	 * @param Context\CondRelOpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondRelOp(Context\CondRelOpContext $context);

	/**
	 * Visit a parse tree produced by the `CondParen` labeled alternative
	 * in {@see GrammarParser::condition()}.
	 *
	 * @param Context\CondParenContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondParen(Context\CondParenContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::relOp()}.
	 *
	 * @param Context\RelOpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRelOp(Context\RelOpContext $context);

	/**
	 * Visit a parse tree produced by the `ExprAddSub` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ExprAddSubContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprAddSub(Context\ExprAddSubContext $context);

	/**
	 * Visit a parse tree produced by the `ExprParen` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ExprParenContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprParen(Context\ExprParenContext $context);

	/**
	 * Visit a parse tree produced by the `ExprMulDiv` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ExprMulDivContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprMulDiv(Context\ExprMulDivContext $context);

	/**
	 * Visit a parse tree produced by the `ExprNumber` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ExprNumberContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprNumber(Context\ExprNumberContext $context);

	/**
	 * Visit a parse tree produced by the `ExprId` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 *
	 * @param Context\ExprIdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExprId(Context\ExprIdContext $context);
}