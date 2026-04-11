<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GrammarParser extends Parser
	{
		public const IF = 1, ELSE = 2, PRINT = 3, ADD = 4, SUB = 5, MUL = 6, DIV = 7, 
               GEQ = 8, LEQ = 9, GT = 10, LT = 11, EQ = 12, NEQ = 13, ASSIGN = 14, 
               LPAREN = 15, RPAREN = 16, LBRACE = 17, RBRACE = 18, SEMICOLON = 19, 
               NUMBER = 20, ID = 21, WS = 22, COMMENT = 23;

		public const RULE_program = 0, RULE_statement = 1, RULE_assignment = 2, 
               RULE_printStmt = 3, RULE_ifStmt = 4, RULE_condition = 5, 
               RULE_relOp = 6, RULE_expr = 7;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'statement', 'assignment', 'printStmt', 'ifStmt', 'condition', 
			'relOp', 'expr'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'if'", "'else'", "'print'", "'+'", "'-'", "'*'", "'/'", "'>='", 
		    "'<='", "'>'", "'<'", "'=='", "'!='", "':='", "'('", "')'", "'{'", 
		    "'}'", "';'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "IF", "ELSE", "PRINT", "ADD", "SUB", "MUL", "DIV", "GEQ", "LEQ", 
		    "GT", "LT", "EQ", "NEQ", "ASSIGN", "LPAREN", "RPAREN", "LBRACE", "RBRACE", 
		    "SEMICOLON", "NUMBER", "ID", "WS", "COMMENT"
		];

		private const SERIALIZED_ATN =
			[4, 1, 23, 92, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 1, 0, 4, 0, 18, 8, 0, 11, 
		    0, 12, 0, 19, 1, 0, 1, 0, 1, 1, 1, 1, 3, 1, 26, 8, 1, 1, 1, 1, 1, 
		    3, 1, 30, 8, 1, 1, 1, 3, 1, 33, 8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 3, 
		    1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 4, 4, 
		    50, 8, 4, 11, 4, 12, 4, 51, 1, 4, 1, 4, 1, 4, 1, 4, 4, 4, 58, 8, 4, 
		    11, 4, 12, 4, 59, 1, 4, 1, 4, 3, 4, 64, 8, 4, 1, 5, 1, 5, 1, 5, 1, 
		    5, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 3, 7, 79, 
		    8, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 5, 7, 87, 8, 7, 10, 7, 12, 
		    7, 90, 9, 7, 1, 7, 0, 1, 14, 8, 0, 2, 4, 6, 8, 10, 12, 14, 0, 3, 1, 
		    0, 8, 13, 1, 0, 6, 7, 1, 0, 4, 5, 95, 0, 17, 1, 0, 0, 0, 2, 32, 1, 
		    0, 0, 0, 4, 34, 1, 0, 0, 0, 6, 38, 1, 0, 0, 0, 8, 43, 1, 0, 0, 0, 
		    10, 65, 1, 0, 0, 0, 12, 69, 1, 0, 0, 0, 14, 78, 1, 0, 0, 0, 16, 18, 
		    3, 2, 1, 0, 17, 16, 1, 0, 0, 0, 18, 19, 1, 0, 0, 0, 19, 17, 1, 0, 
		    0, 0, 19, 20, 1, 0, 0, 0, 20, 21, 1, 0, 0, 0, 21, 22, 5, 0, 0, 1, 
		    22, 1, 1, 0, 0, 0, 23, 25, 3, 4, 2, 0, 24, 26, 5, 19, 0, 0, 25, 24, 
		    1, 0, 0, 0, 25, 26, 1, 0, 0, 0, 26, 33, 1, 0, 0, 0, 27, 29, 3, 6, 
		    3, 0, 28, 30, 5, 19, 0, 0, 29, 28, 1, 0, 0, 0, 29, 30, 1, 0, 0, 0, 
		    30, 33, 1, 0, 0, 0, 31, 33, 3, 8, 4, 0, 32, 23, 1, 0, 0, 0, 32, 27, 
		    1, 0, 0, 0, 32, 31, 1, 0, 0, 0, 33, 3, 1, 0, 0, 0, 34, 35, 5, 21, 
		    0, 0, 35, 36, 5, 14, 0, 0, 36, 37, 3, 14, 7, 0, 37, 5, 1, 0, 0, 0, 
		    38, 39, 5, 3, 0, 0, 39, 40, 5, 15, 0, 0, 40, 41, 5, 21, 0, 0, 41, 
		    42, 5, 16, 0, 0, 42, 7, 1, 0, 0, 0, 43, 44, 5, 1, 0, 0, 44, 45, 5, 
		    15, 0, 0, 45, 46, 3, 10, 5, 0, 46, 47, 5, 16, 0, 0, 47, 49, 5, 17, 
		    0, 0, 48, 50, 3, 2, 1, 0, 49, 48, 1, 0, 0, 0, 50, 51, 1, 0, 0, 0, 
		    51, 49, 1, 0, 0, 0, 51, 52, 1, 0, 0, 0, 52, 53, 1, 0, 0, 0, 53, 63, 
		    5, 18, 0, 0, 54, 55, 5, 2, 0, 0, 55, 57, 5, 17, 0, 0, 56, 58, 3, 2, 
		    1, 0, 57, 56, 1, 0, 0, 0, 58, 59, 1, 0, 0, 0, 59, 57, 1, 0, 0, 0, 
		    59, 60, 1, 0, 0, 0, 60, 61, 1, 0, 0, 0, 61, 62, 5, 18, 0, 0, 62, 64, 
		    1, 0, 0, 0, 63, 54, 1, 0, 0, 0, 63, 64, 1, 0, 0, 0, 64, 9, 1, 0, 0, 
		    0, 65, 66, 3, 14, 7, 0, 66, 67, 3, 12, 6, 0, 67, 68, 3, 14, 7, 0, 
		    68, 11, 1, 0, 0, 0, 69, 70, 7, 0, 0, 0, 70, 13, 1, 0, 0, 0, 71, 72, 
		    6, 7, -1, 0, 72, 73, 5, 15, 0, 0, 73, 74, 3, 14, 7, 0, 74, 75, 5, 
		    16, 0, 0, 75, 79, 1, 0, 0, 0, 76, 79, 5, 20, 0, 0, 77, 79, 5, 21, 
		    0, 0, 78, 71, 1, 0, 0, 0, 78, 76, 1, 0, 0, 0, 78, 77, 1, 0, 0, 0, 
		    79, 88, 1, 0, 0, 0, 80, 81, 10, 5, 0, 0, 81, 82, 7, 1, 0, 0, 82, 87, 
		    3, 14, 7, 6, 83, 84, 10, 4, 0, 0, 84, 85, 7, 2, 0, 0, 85, 87, 3, 14, 
		    7, 5, 86, 80, 1, 0, 0, 0, 86, 83, 1, 0, 0, 0, 87, 90, 1, 0, 0, 0, 
		    88, 86, 1, 0, 0, 0, 88, 89, 1, 0, 0, 0, 89, 15, 1, 0, 0, 0, 90, 88, 
		    1, 0, 0, 0, 10, 19, 25, 29, 32, 51, 59, 63, 78, 86, 88];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Grammar.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function program(): Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(17); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(16);
		        	$this->statement();
		        	$this->setState(19); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2097162) !== 0));
		        $this->setState(21);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statement(): Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_statement);

		    try {
		        $this->setState(32);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ID:
		            	$localContext = new Context\StmtAssignContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(23);
		            	$this->assignment();
		            	$this->setState(25);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::SEMICOLON) {
		            		$this->setState(24);
		            		$this->match(self::SEMICOLON);
		            	}
		            	break;

		            case self::PRINT:
		            	$localContext = new Context\StmtPrintContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(27);
		            	$this->printStmt();
		            	$this->setState(29);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::SEMICOLON) {
		            		$this->setState(28);
		            		$this->match(self::SEMICOLON);
		            	}
		            	break;

		            case self::IF:
		            	$localContext = new Context\StmtIfContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(31);
		            	$this->ifStmt();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignment(): Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(34);
		        $this->match(self::ID);
		        $this->setState(35);
		        $this->match(self::ASSIGN);
		        $this->setState(36);
		        $this->recursiveExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function printStmt(): Context\PrintStmtContext
		{
		    $localContext = new Context\PrintStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_printStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(38);
		        $this->match(self::PRINT);
		        $this->setState(39);
		        $this->match(self::LPAREN);
		        $this->setState(40);
		        $this->match(self::ID);
		        $this->setState(41);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(43);
		        $this->match(self::IF);
		        $this->setState(44);
		        $this->match(self::LPAREN);
		        $this->setState(45);
		        $this->condition();
		        $this->setState(46);
		        $this->match(self::RPAREN);
		        $this->setState(47);
		        $this->match(self::LBRACE);
		        $this->setState(49); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(48);
		        	$this->statement();
		        	$this->setState(51); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2097162) !== 0));
		        $this->setState(53);
		        $this->match(self::RBRACE);
		        $this->setState(63);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(54);
		        	$this->match(self::ELSE);
		        	$this->setState(55);
		        	$this->match(self::LBRACE);
		        	$this->setState(57); 
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	do {
		        		$this->setState(56);
		        		$this->statement();
		        		$this->setState(59); 
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	} while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 2097162) !== 0));
		        	$this->setState(61);
		        	$this->match(self::RBRACE);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function condition(): Context\ConditionContext
		{
		    $localContext = new Context\ConditionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_condition);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(65);
		        $this->recursiveExpr(0);
		        $this->setState(66);
		        $this->relOp();
		        $this->setState(67);
		        $this->recursiveExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function relOp(): Context\RelOpContext
		{
		    $localContext = new Context\RelOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_relOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(69);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 16128) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expr(): Context\ExprContext
		{
			return $this->recursiveExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpr(int $precedence): Context\ExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 14;
			$this->enterRecursionRule($localContext, 14, self::RULE_expr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(78);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::LPAREN:
				    	$localContext = new Context\ExprParenContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(72);
				    	$this->match(self::LPAREN);
				    	$this->setState(73);
				    	$this->recursiveExpr(0);
				    	$this->setState(74);
				    	$this->match(self::RPAREN);
				    	break;

				    case self::NUMBER:
				    	$localContext = new Context\ExprNumberContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(76);
				    	$this->match(self::NUMBER);
				    	break;

				    case self::ID:
				    	$localContext = new Context\ExprIdContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(77);
				    	$this->match(self::ID);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(88);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(86);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
							case 1:
							    $localContext = new Context\ExprMulDivContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(80);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(81);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::MUL || $_la === self::DIV)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(82);
							    $this->recursiveExpr(6);
							break;

							case 2:
							    $localContext = new Context\ExprAddSubContext(new Context\ExprContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expr);
							    $this->setState(83);

							    if (!($this->precpred($this->ctx, 4))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 4)");
							    }
							    $this->setState(84);

							    $localContext->op = $this->input->LT(1);
							    $_la = $this->input->LA(1);

							    if (!($_la === self::ADD || $_la === self::SUB)) {
							    	    $localContext->op = $this->errorHandler->recoverInline($this);
							    } else {
							    	if ($this->input->LA(1) === Token::EOF) {
							    	    $this->matchedEOF = true;
							        }

							    	$this->errorHandler->reportMatch($this);
							    	$this->consume();
							    }
							    $this->setState(85);
							    $this->recursiveExpr(5);
							break;
						} 
					}

					$this->setState(90);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 7:
						return $this->sempredExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpr(?Context\ExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 5);

			    case 1:
			        return $this->precpred($this->ctx, 4);
			}

			return true;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GrammarParser;
	use GrammarVisitor;
	use GrammarListener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_program;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EOF, 0);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitProgram($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitProgram($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_statement;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtPrintContext extends StatementContext
	{
		public function __construct(StatementContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function printStmt(): ?PrintStmtContext
	    {
	    	return $this->getTypedRuleContext(PrintStmtContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterStmtPrint($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitStmtPrint($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitStmtPrint($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtAssignContext extends StatementContext
	{
		public function __construct(StatementContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function assignment(): ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

	    public function SEMICOLON(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::SEMICOLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterStmtAssign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitStmtAssign($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitStmtAssign($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StmtIfContext extends StatementContext
	{
		public function __construct(StatementContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterStmtIf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitStmtIf($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitStmtIf($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignmentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_assignment;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function ASSIGN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ASSIGN, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAssignment($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrintStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_printStmt;
	    }

	    public function PRINT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::PRINT, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPrintStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPrintStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPrintStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IfStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_ifStmt;
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::IF, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function condition(): ?ConditionContext
	    {
	    	return $this->getTypedRuleContext(ConditionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function LBRACE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::LBRACE);
	    	}

	        return $this->getToken(GrammarParser::LBRACE, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function RBRACE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GrammarParser::RBRACE);
	    	}

	        return $this->getToken(GrammarParser::RBRACE, $index);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ELSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterIfStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitIfStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitIfStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConditionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_condition;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

	    public function relOp(): ?RelOpContext
	    {
	    	return $this->getTypedRuleContext(RelOpContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterCondition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitCondition($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitCondition($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RelOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_relOp;
	    }

	    public function GT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::GT, 0);
	    }

	    public function LT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LT, 0);
	    }

	    public function GEQ(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::GEQ, 0);
	    }

	    public function LEQ(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LEQ, 0);
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EQ, 0);
	    }

	    public function NEQ(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NEQ, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterRelOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitRelOp($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitRelOp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_expr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ExprAddSubContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

	    public function ADD(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ADD, 0);
	    }

	    public function SUB(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::SUB, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterExprAddSub($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitExprAddSub($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitExprAddSub($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprParenContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LPAREN, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RPAREN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterExprParen($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitExprParen($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitExprParen($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprMulDivContext extends ExprContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

	    public function MUL(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::MUL, 0);
	    }

	    public function DIV(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::DIV, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterExprMulDiv($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitExprMulDiv($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitExprMulDiv($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprNumberContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NUMBER(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NUMBER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterExprNumber($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitExprNumber($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitExprNumber($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ExprIdContext extends ExprContext
	{
		public function __construct(ExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterExprId($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitExprId($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitExprId($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}