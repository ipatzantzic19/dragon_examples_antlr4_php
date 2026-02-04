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

		public const RULE_l = 0, RULE_e = 1, RULE_ep = 2, RULE_t = 3, RULE_tp = 4, 
               RULE_f = 5;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'l', 'e', 'ep', 't', 'tp', 'f'
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
			[4, 1, 6, 43, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 7, 
		    4, 2, 5, 7, 5, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 
		    2, 1, 2, 1, 2, 3, 2, 24, 8, 2, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 
		    1, 4, 1, 4, 3, 4, 34, 8, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 41, 
		    8, 5, 1, 5, 0, 0, 6, 0, 2, 4, 6, 8, 10, 0, 0, 39, 0, 12, 1, 0, 0, 
		    0, 2, 15, 1, 0, 0, 0, 4, 23, 1, 0, 0, 0, 6, 25, 1, 0, 0, 0, 8, 33, 
		    1, 0, 0, 0, 10, 40, 1, 0, 0, 0, 12, 13, 3, 2, 1, 0, 13, 14, 5, 0, 
		    0, 1, 14, 1, 1, 0, 0, 0, 15, 16, 3, 6, 3, 0, 16, 17, 3, 4, 2, 0, 17, 
		    3, 1, 0, 0, 0, 18, 19, 5, 1, 0, 0, 19, 20, 3, 6, 3, 0, 20, 21, 3, 
		    4, 2, 0, 21, 24, 1, 0, 0, 0, 22, 24, 1, 0, 0, 0, 23, 18, 1, 0, 0, 
		    0, 23, 22, 1, 0, 0, 0, 24, 5, 1, 0, 0, 0, 25, 26, 3, 10, 5, 0, 26, 
		    27, 3, 8, 4, 0, 27, 7, 1, 0, 0, 0, 28, 29, 5, 2, 0, 0, 29, 30, 3, 
		    10, 5, 0, 30, 31, 3, 8, 4, 0, 31, 34, 1, 0, 0, 0, 32, 34, 1, 0, 0, 
		    0, 33, 28, 1, 0, 0, 0, 33, 32, 1, 0, 0, 0, 34, 9, 1, 0, 0, 0, 35, 
		    36, 5, 3, 0, 0, 36, 37, 3, 2, 1, 0, 37, 38, 5, 4, 0, 0, 38, 41, 1, 
		    0, 0, 0, 39, 41, 5, 5, 0, 0, 40, 35, 1, 0, 0, 0, 40, 39, 1, 0, 0, 
		    0, 41, 11, 1, 0, 0, 0, 3, 23, 33, 40];
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
		        $this->setState(12);
		        $this->e();
		        $this->setState(13);
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
		public function e(): Context\EContext
		{
		    $localContext = new Context\EContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_e);

		    try {
		        $localContext = new Context\ETContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(15);
		        $this->t();
		        $this->setState(16);
		        $this->ep();
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
		public function ep(): Context\EpContext
		{
		    $localContext = new Context\EpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_ep);

		    try {
		        $this->setState(23);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__0:
		            	$localContext = new Context\SumContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(18);
		            	$this->match(self::T__0);
		            	$this->setState(19);
		            	$this->t();
		            	$this->setState(20);
		            	$this->ep();
		            	break;

		            case self::EOF:
		            case self::T__3:
		            	$localContext = new Context\EpsSumContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);

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
		public function t(): Context\TContext
		{
		    $localContext = new Context\TContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_t);

		    try {
		        $localContext = new Context\TFContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(25);
		        $this->f();
		        $this->setState(26);
		        $this->tp();
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
		public function tp(): Context\TpContext
		{
		    $localContext = new Context\TpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_tp);

		    try {
		        $this->setState(33);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__1:
		            	$localContext = new Context\MulContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(28);
		            	$this->match(self::T__1);
		            	$this->setState(29);
		            	$this->f();
		            	$this->setState(30);
		            	$this->tp();
		            	break;

		            case self::EOF:
		            case self::T__0:
		            case self::T__3:
		            	$localContext = new Context\EpsMulContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);

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
		public function f(): Context\FContext
		{
		    $localContext = new Context\FContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_f);

		    try {
		        $this->setState(40);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__2:
		            	$localContext = new Context\BraceContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(35);
		            	$this->match(self::T__2);
		            	$this->setState(36);
		            	$this->e();
		            	$this->setState(37);
		            	$this->match(self::T__3);
		            	break;

		            case self::DIGIT:
		            	$localContext = new Context\DigitContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(39);
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

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EOF, 0);
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

	class ETContext extends EContext
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

	    public function ep(): ?EpContext
	    {
	    	return $this->getTypedRuleContext(EpContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterET($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitET($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitET($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_ep;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class SumContext extends EpContext
	{
		public function __construct(EpContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function t(): ?TContext
	    {
	    	return $this->getTypedRuleContext(TContext::class, 0);
	    }

	    public function ep(): ?EpContext
	    {
	    	return $this->getTypedRuleContext(EpContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterSum($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitSum($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitSum($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class EpsSumContext extends EpContext
	{
		public function __construct(EpContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterEpsSum($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitEpsSum($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitEpsSum($this);
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

	class TFContext extends TContext
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

	    public function tp(): ?TpContext
	    {
	    	return $this->getTypedRuleContext(TpContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterTF($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitTF($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitTF($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_tp;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class EpsMulContext extends TpContext
	{
		public function __construct(TpContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterEpsMul($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitEpsMul($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitEpsMul($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MulContext extends TpContext
	{
		public function __construct(TpContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function f(): ?FContext
	    {
	    	return $this->getTypedRuleContext(FContext::class, 0);
	    }

	    public function tp(): ?TpContext
	    {
	    	return $this->getTypedRuleContext(TpContext::class, 0);
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

	class DigitContext extends FContext
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
			    $listener->enterDigit($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitDigit($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitDigit($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BraceContext extends FContext
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
			    $listener->enterBrace($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitBrace($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBrace($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}