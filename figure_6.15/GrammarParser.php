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
		public const INT = 1, FLOAT = 2, LBRACK = 3, RBRACK = 4, NUMBER = 5, WS = 6;

		public const RULE_t = 0, RULE_b = 1, RULE_c = 2;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			't', 'b', 'c'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'int'", "'float'", "'['", "']'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "INT", "FLOAT", "LBRACK", "RBRACK", "NUMBER", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 6, 22, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 1, 0, 1, 0, 1, 0, 1, 
		    0, 1, 1, 1, 1, 3, 1, 13, 8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 
		    20, 8, 2, 1, 2, 0, 0, 3, 0, 2, 4, 0, 0, 20, 0, 6, 1, 0, 0, 0, 2, 12, 
		    1, 0, 0, 0, 4, 19, 1, 0, 0, 0, 6, 7, 3, 2, 1, 0, 7, 8, 3, 4, 2, 0, 
		    8, 9, 5, 0, 0, 1, 9, 1, 1, 0, 0, 0, 10, 13, 5, 1, 0, 0, 11, 13, 5, 
		    2, 0, 0, 12, 10, 1, 0, 0, 0, 12, 11, 1, 0, 0, 0, 13, 3, 1, 0, 0, 0, 
		    14, 15, 5, 3, 0, 0, 15, 16, 5, 5, 0, 0, 16, 17, 5, 4, 0, 0, 17, 20, 
		    3, 4, 2, 0, 18, 20, 1, 0, 0, 0, 19, 14, 1, 0, 0, 0, 19, 18, 1, 0, 
		    0, 0, 20, 5, 1, 0, 0, 0, 2, 12, 19];
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
		public function t(): Context\TContext
		{
		    $localContext = new Context\TContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_t);

		    try {
		        $localContext = new Context\T_ruleContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(6);
		        $this->b();
		        $this->setState(7);
		        $this->c();
		        $this->setState(8);
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
		public function b(): Context\BContext
		{
		    $localContext = new Context\BContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_b);

		    try {
		        $this->setState(12);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::INT:
		            	$localContext = new Context\B_intContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(10);
		            	$this->match(self::INT);
		            	break;

		            case self::FLOAT:
		            	$localContext = new Context\B_floatContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(11);
		            	$this->match(self::FLOAT);
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
		public function c(): Context\CContext
		{
		    $localContext = new Context\CContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_c);

		    try {
		        $this->setState(19);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::LBRACK:
		            	$localContext = new Context\C_arrayContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(14);
		            	$this->match(self::LBRACK);
		            	$this->setState(15);
		            	$this->match(self::NUMBER);
		            	$this->setState(16);
		            	$this->match(self::RBRACK);
		            	$this->setState(17);
		            	$this->c();
		            	break;

		            case self::EOF:
		            	$localContext = new Context\C_emptyContext($localContext);
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
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GrammarParser;
	use GrammarListener;

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

	class T_ruleContext extends TContext
	{
		public function __construct(TContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function b(): ?BContext
	    {
	    	return $this->getTypedRuleContext(BContext::class, 0);
	    }

	    public function c(): ?CContext
	    {
	    	return $this->getTypedRuleContext(CContext::class, 0);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::EOF, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterT_rule($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitT_rule($this);
		    }
		}
	} 

	class BContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_b;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class B_floatContext extends BContext
	{
		public function __construct(BContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::FLOAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterB_float($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitB_float($this);
		    }
		}
	}

	class B_intContext extends BContext
	{
		public function __construct(BContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::INT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterB_int($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitB_int($this);
		    }
		}
	} 

	class CContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_c;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class C_emptyContext extends CContext
	{
		public function __construct(CContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterC_empty($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitC_empty($this);
		    }
		}
	}

	class C_arrayContext extends CContext
	{
		public function __construct(CContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LBRACK(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::LBRACK, 0);
	    }

	    public function NUMBER(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NUMBER, 0);
	    }

	    public function RBRACK(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::RBRACK, 0);
	    }

	    public function c(): ?CContext
	    {
	    	return $this->getTypedRuleContext(CContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->enterC_array($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GrammarListener) {
			    $listener->exitC_array($this);
		    }
		}
	} 
}