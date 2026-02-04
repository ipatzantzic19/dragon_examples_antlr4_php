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
	 * Enter a parse tree produced by {@see GrammarParser::start()}.
	 * @param $context The parse tree.
	 */
	public function enterStart(Context\StartContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::start()}.
	 * @param $context The parse tree.
	 */
	public function exitStart(Context\StartContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::decl()}.
	 * @param $context The parse tree.
	 */
	public function enterDecl(Context\DeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::decl()}.
	 * @param $context The parse tree.
	 */
	public function exitDecl(Context\DeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterType(Context\TypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitType(Context\TypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GrammarParser::list()}.
	 * @param $context The parse tree.
	 */
	public function enterList(Context\ListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GrammarParser::list()}.
	 * @param $context The parse tree.
	 */
	public function exitList(Context\ListContext $context): void;
}