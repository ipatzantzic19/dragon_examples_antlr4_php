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
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               ID = 7, NUM = 8, WS = 9;

		public const RULE_e = 0, RULE_t = 1, RULE_f = 2;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'e', 't', 'f'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'+'", "'-'", "'*'", "'/'", "'('", "')'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, "ID", "NUM", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 9, 37, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 1, 0, 1, 0, 1, 0, 1, 
		    0, 1, 0, 1, 0, 5, 0, 13, 8, 0, 10, 0, 12, 0, 16, 9, 0, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 5, 1, 24, 8, 1, 10, 1, 12, 1, 27, 9, 1, 1, 
		    2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 35, 8, 2, 1, 2, 0, 2, 0, 2, 
		    3, 0, 2, 4, 0, 2, 1, 0, 1, 2, 1, 0, 3, 4, 37, 0, 6, 1, 0, 0, 0, 2, 
		    17, 1, 0, 0, 0, 4, 34, 1, 0, 0, 0, 6, 7, 6, 0, -1, 0, 7, 8, 3, 2, 
		    1, 0, 8, 14, 1, 0, 0, 0, 9, 10, 10, 2, 0, 0, 10, 11, 7, 0, 0, 0, 11, 
		    13, 3, 2, 1, 0, 12, 9, 1, 0, 0, 0, 13, 16, 1, 0, 0, 0, 14, 12, 1, 
		    0, 0, 0, 14, 15, 1, 0, 0, 0, 15, 1, 1, 0, 0, 0, 16, 14, 1, 0, 0, 0, 
		    17, 18, 6, 1, -1, 0, 18, 19, 3, 4, 2, 0, 19, 25, 1, 0, 0, 0, 20, 21, 
		    10, 2, 0, 0, 21, 22, 7, 1, 0, 0, 22, 24, 3, 4, 2, 0, 23, 20, 1, 0, 
		    0, 0, 24, 27, 1, 0, 0, 0, 25, 23, 1, 0, 0, 0, 25, 26, 1, 0, 0, 0, 
		    26, 3, 1, 0, 0, 0, 27, 25, 1, 0, 0, 0, 28, 29, 5, 5, 0, 0, 29, 30, 
		    3, 0, 0, 0, 30, 31, 5, 6, 0, 0, 31, 35, 1, 0, 0, 0, 32, 35, 5, 7, 
		    0, 0, 33, 35, 5, 8, 0, 0, 34, 28, 1, 0, 0, 0, 34, 32, 1, 0, 0, 0, 
		    34, 33, 1, 0, 0, 0, 35, 5, 1, 0, 0, 0, 3, 14, 25, 34];
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
		public function e(): Context\EContext
		{
			return $this->recursiveE(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveE(int $precedence): Context\EContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\EContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 0;
			$this->enterRecursionRule($localContext, 0, self::RULE_e, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\PassTContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(7);
				$this->recursiveT(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(14);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\SumresContext(new Context\EContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_e);
						$this->setState(9);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(10);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!($_la === self::T__0 || $_la === self::T__1)) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(11);
						$this->recursiveT(0); 
					}

					$this->setState(16);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx);
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

		/**
		 * @throws RecognitionException
		 */
		public function t(): Context\TContext
		{
			return $this->recursiveT(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveT(int $precedence): Context\TContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\TContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 2;
			$this->enterRecursionRule($localContext, 2, self::RULE_t, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\PassFContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(18);
				$this->f();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(25);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\MuldivContext(new Context\TContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_t);
						$this->setState(20);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(21);

						$localContext->op = $this->input->LT(1);
						$_la = $this->input->LA(1);

						if (!($_la === self::T__2 || $_la === self::T__3)) {
							    $localContext->op = $this->errorHandler->recoverInline($this);
						} else {
							if ($this->input->LA(1) === Token::EOF) {
							    $this->matchedEOF = true;
						    }

							$this->errorHandler->reportMatch($this);
							$this->consume();
						}
						$this->setState(22);
						$this->f(); 
					}

					$this->setState(27);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx);
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

		/**
		 * @throws RecognitionException
		 */
		public function f(): Context\FContext
		{
		    $localContext = new Context\FContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_f);

		    try {
		        $this->setState(34);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__4:
		            	$localContext = new Context\PassEContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(28);
		            	$this->match(self::T__4);
		            	$this->setState(29);
		            	$this->recursiveE(0);
		            	$this->setState(30);
		            	$this->match(self::T__5);
		            	break;

		            case self::ID:
		            	$localContext = new Context\IdContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(32);
		            	$this->match(self::ID);
		            	break;

		            case self::NUM:
		            	$localContext = new Context\NumContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(33);
		            	$this->match(self::NUM);
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

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 0:
						return $this->sempredE($localContext, $predicateIndex);

					case 1:
						return $this->sempredT($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredE(?Context\EContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredT(?Context\TContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 1:
			        return $this->precpred($this->ctx, 2);
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

	class EContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_e;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class SumresContext extends EContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(EContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

	    public function t(): ?TContext
	    {
	    	return $this->getTypedRuleContext(TContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSumres($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSumres($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSumres($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PassTContext extends EContext
	{
		public function __construct(EContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function t(): ?TContext
	    {
	    	return $this->getTypedRuleContext(TContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPassT($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPassT($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPassT($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_t;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class PassFContext extends TContext
	{
		public function __construct(TContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function f(): ?FContext
	    {
	    	return $this->getTypedRuleContext(FContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPassF($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPassF($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPassF($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MuldivContext extends TContext
	{
		/**
		 * @var Token|null $op
		 */
		public $op;

		public function __construct(TContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function t(): ?TContext
	    {
	    	return $this->getTypedRuleContext(TContext::class, 0);
	    }

	    public function f(): ?FContext
	    {
	    	return $this->getTypedRuleContext(FContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterMuldiv($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMuldiv($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMuldiv($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_f;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class PassEContext extends FContext
	{
		public function __construct(FContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterPassE($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPassE($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPassE($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class NumContext extends FContext
	{
		public function __construct(FContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NUM(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NUM, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterNum($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitNum($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitNum($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdContext extends FContext
	{
		public function __construct(FContext $context)
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
			    $listener->enterId($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitId($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitId($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}