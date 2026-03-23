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
	 * Enter a parse tree produced by the `StmtAssign`
	 * labeled alternative in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtAssign(Context\StmtAssignContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtAssign` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtAssign(Context\StmtAssignContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtPrint`
	 * labeled alternative in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtPrint(Context\StmtPrintContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtPrint` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtPrint(Context\StmtPrintContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtIf`
	 * labeled alternative in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtIf(Context\StmtIfContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtIf` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtIf(Context\StmtIfContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment(Context\AssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment(Context\AssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::printStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterPrintStmt(Context\PrintStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::printStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitPrintStmt(Context\PrintStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function enterCondition(Context\ConditionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function exitCondition(Context\ConditionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::relOp()}.
	 * @param $context The parse tree.
	 */
	public function enterRelOp(Context\RelOpContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::relOp()}.
	 * @param $context The parse tree.
	 */
	public function exitRelOp(Context\RelOpContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprAddSub`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterExprAddSub(Context\ExprAddSubContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprAddSub` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitExprAddSub(Context\ExprAddSubContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprParen`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterExprParen(Context\ExprParenContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprParen` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitExprParen(Context\ExprParenContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprMulDiv`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterExprMulDiv(Context\ExprMulDivContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprMulDiv` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitExprMulDiv(Context\ExprMulDivContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprNumber`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterExprNumber(Context\ExprNumberContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprNumber` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitExprNumber(Context\ExprNumberContext $context): void;
	/**
	 * Enter a parse tree produced by the `ExprId`
	 * labeled alternative in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterExprId(Context\ExprIdContext $context): void;
	/**
	 * Exit a parse tree produced by the `ExprId` labeled alternative
	 * in {@see GrammarParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitExprId(Context\ExprIdContext $context): void;
}