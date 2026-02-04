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
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, DIGIT = 5, WS = 6;

		public const RULE_l = 0, RULE_e = 1, RULE_t = 2, RULE_f = 3;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'l', 'e', 't', 'f'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'+'", "'*'", "'('", "')'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, "DIGIT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 6, 40, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 1, 0, 1, 
		    0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 5, 1, 17, 8, 1, 10, 1, 12, 
		    1, 20, 9, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 5, 2, 28, 8, 2, 10, 
		    2, 12, 2, 31, 9, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 3, 3, 38, 8, 3, 
		    1, 3, 0, 2, 2, 4, 4, 0, 2, 4, 6, 0, 0, 38, 0, 8, 1, 0, 0, 0, 2, 10, 
		    1, 0, 0, 0, 4, 21, 1, 0, 0, 0, 6, 37, 1, 0, 0, 0, 8, 9, 3, 2, 1, 0, 
		    9, 1, 1, 0, 0, 0, 10, 11, 6, 1, -1, 0, 11, 12, 3, 4, 2, 0, 12, 18, 
		    1, 0, 0, 0, 13, 14, 10, 2, 0, 0, 14, 15, 5, 1, 0, 0, 15, 17, 3, 4, 
		    2, 0, 16, 13, 1, 0, 0, 0, 17, 20, 1, 0, 0, 0, 18, 16, 1, 0, 0, 0, 
		    18, 19, 1, 0, 0, 0, 19, 3, 1, 0, 0, 0, 20, 18, 1, 0, 0, 0, 21, 22, 
		    6, 2, -1, 0, 22, 23, 3, 6, 3, 0, 23, 29, 1, 0, 0, 0, 24, 25, 10, 2, 
		    0, 0, 25, 26, 5, 2, 0, 0, 26, 28, 3, 6, 3, 0, 27, 24, 1, 0, 0, 0, 
		    28, 31, 1, 0, 0, 0, 29, 27, 1, 0, 0, 0, 29, 30, 1, 0, 0, 0, 30, 5, 
		    1, 0, 0, 0, 31, 29, 1, 0, 0, 0, 32, 33, 5, 3, 0, 0, 33, 34, 3, 2, 
		    1, 0, 34, 35, 5, 4, 0, 0, 35, 38, 1, 0, 0, 0, 36, 38, 5, 5, 0, 0, 
		    37, 32, 1, 0, 0, 0, 37, 36, 1, 0, 0, 0, 38, 7, 1, 0, 0, 0, 3, 18, 
		    29, 37];
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
		public function l(): Context\LContext
		{
		    $localContext = new Context\LContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_l);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(8);
		        $this->recursiveE(0);
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
			$startState = 2;
			$this->enterRecursionRule($localContext, 2, self::RULE_e, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\PatContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(11);
				$this->recursiveT(0);
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(18);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\AddContext(new Context\EContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_e);
						$this->setState(13);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(14);
						$this->match(self::T__0);
						$this->setState(15);
						$this->recursiveT(0); 
					}

					$this->setState(20);
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
			$startState = 4;
			$this->enterRecursionRule($localContext, 4, self::RULE_t, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$localContext = new Context\PafContext($localContext);
				$this->ctx = $localContext;
				$previousContext = $localContext;

				$this->setState(22);
				$this->f();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(29);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\MulContext(new Context\TContext($parentContext, $parentState));
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_t);
						$this->setState(24);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(25);
						$this->match(self::T__1);
						$this->setState(26);
						$this->f(); 
					}

					$this->setState(31);
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

		    $this->enterRule($localContext, 6, self::RULE_f);

		    try {
		        $this->setState(37);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__2:
		            	$localContext = new Context\ParContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(32);
		            	$this->match(self::T__2);
		            	$this->setState(33);
		            	$this->recursiveE(0);
		            	$this->setState(34);
		            	$this->match(self::T__3);
		            	break;

		            case self::DIGIT:
		            	$localContext = new Context\IntContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(36);
		            	$this->match(self::DIGIT);
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
					case 1:
						return $this->sempredE($localContext, $predicateIndex);

					case 2:
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

	class LContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_l;
	    }

	    public function e(): ?EContext
	    {
	    	return $this->getTypedRuleContext(EContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterL($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitL($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitL($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

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

	class AddContext extends EContext
	{
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
			    $listener->enterAdd($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitAdd($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitAdd($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PatContext extends EContext
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
			    $listener->enterPat($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPat($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPat($this);
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

	class PafContext extends TContext
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
			    $listener->enterPaf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPaf($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPaf($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MulContext extends TContext
	{
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
			    $listener->enterMul($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitMul($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitMul($this);
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

	class ParContext extends FContext
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
			    $listener->enterPar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitPar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitPar($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IntContext extends FContext
	{
		public function __construct(FContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function DIGIT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::DIGIT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterInt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitInt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitInt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}