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
	 * Visit a parse tree produced by {@see GrammarParser::line()}.
	 *
	 * @param Context\LineContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLine(Context\LineContext $context);

	/**
	 * Visit a parse tree produced by the `visitAssignment` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 *
	 * @param Context\VisitAssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVisitAssignment(Context\VisitAssignmentContext $context);

	/**
	 * Visit a parse tree produced by the `visitPrintExpression` labeled alternative
	 * in {@see GrammarParser::statement()}.
	 *
	 * @param Context\VisitPrintExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVisitPrintExpression(Context\VisitPrintExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::assignment()}.
	 *
	 * @param Context\AssignmentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssignment(Context\AssignmentContext $context);

	/**
	 * Visit a parse tree produced by the `identifierName` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 *
	 * @param Context\IdentifierNameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifierName(Context\IdentifierNameContext $context);

	/**
	 * Visit a parse tree produced by the `number` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 *
	 * @param Context\NumberContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNumber(Context\NumberContext $context);

	/**
	 * Visit a parse tree produced by the `additionSubtraction` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 *
	 * @param Context\AdditionSubtractionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdditionSubtraction(Context\AdditionSubtractionContext $context);

	/**
	 * Visit a parse tree produced by the `multiplicationDivision` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 *
	 * @param Context\MultiplicationDivisionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMultiplicationDivision(Context\MultiplicationDivisionContext $context);

	/**
	 * Visit a parse tree produced by the `unaryMinus` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 *
	 * @param Context\UnaryMinusContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnaryMinus(Context\UnaryMinusContext $context);

	/**
	 * Visit a parse tree produced by the `parenthesis` labeled alternative
	 * in {@see GrammarParser::expression()}.
	 *
	 * @param Context\ParenthesisContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParenthesis(Context\ParenthesisContext $context);
}