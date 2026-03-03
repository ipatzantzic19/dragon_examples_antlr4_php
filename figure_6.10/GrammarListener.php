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
	 * Enter a parse tree produced by {@see GrammarParser::line()}.
	 * @param $context The parse tree.
	 */
	public function enterLine(Context\LineContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::line()}.
	 * @param $context The parse tree.
	 */
	public function exitLine(Context\LineContext $context): void;
	/**
	 * Enter a parse tree produced by the `visitAssignment`
	 * labeled alternative in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterVisitAssignment(Context\VisitAssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by the `visitAssignment` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitVisitAssignment(Context\VisitAssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by the `visitPrintExpression`
	 * labeled alternative in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterVisitPrintExpression(Context\VisitPrintExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by the `visitPrintExpression` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitVisitPrintExpression(Context\VisitPrintExpressionContext $context): void;
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
	 * Enter a parse tree produced by the `identifierName`
	 * labeled alternative in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifierName(Context\IdentifierNameContext $context): void;
	/**
	 * Exit a parse tree produced by the `identifierName` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifierName(Context\IdentifierNameContext $context): void;
	/**
	 * Enter a parse tree produced by the `number`
	 * labeled alternative in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterNumber(Context\NumberContext $context): void;
	/**
	 * Exit a parse tree produced by the `number` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitNumber(Context\NumberContext $context): void;
	/**
	 * Enter a parse tree produced by the `additionSubtraction`
	 * labeled alternative in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterAdditionSubtraction(Context\AdditionSubtractionContext $context): void;
	/**
	 * Exit a parse tree produced by the `additionSubtraction` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitAdditionSubtraction(Context\AdditionSubtractionContext $context): void;
	/**
	 * Enter a parse tree produced by the `multiplicationDivision`
	 * labeled alternative in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterMultiplicationDivision(Context\MultiplicationDivisionContext $context): void;
	/**
	 * Exit a parse tree produced by the `multiplicationDivision` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitMultiplicationDivision(Context\MultiplicationDivisionContext $context): void;
	/**
	 * Enter a parse tree produced by the `unaryMinus`
	 * labeled alternative in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryMinus(Context\UnaryMinusContext $context): void;
	/**
	 * Exit a parse tree produced by the `unaryMinus` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryMinus(Context\UnaryMinusContext $context): void;
	/**
	 * Enter a parse tree produced by the `parenthesis`
	 * labeled alternative in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterParenthesis(Context\ParenthesisContext $context): void;
	/**
	 * Exit a parse tree produced by the `parenthesis` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitParenthesis(Context\ParenthesisContext $context): void;
}