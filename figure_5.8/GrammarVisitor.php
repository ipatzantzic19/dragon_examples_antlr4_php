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
	 * Visit a parse tree produced by {@see GrammarParser::start()}.
	 *
	 * @param Context\StartContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStart(Context\StartContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::decl()}.
	 *
	 * @param Context\DeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDecl(Context\DeclContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::type()}.
	 *
	 * @param Context\TypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType(Context\TypeContext $context);

	/**
	 * Visit a parse tree produced by {@see GrammarParser::list()}.
	 *
	 * @param Context\ListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitList(Context\ListContext $context);
}