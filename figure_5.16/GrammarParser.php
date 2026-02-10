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
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, NUM = 5;

		public const RULE_t = 0, RULE_b = 1, RULE_c = 2, RULE_n = 3;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			't', 'b', 'c', 'n'
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
		    null, null, null, null, null, "NUM"
		];

		private const SERIALIZED_ATN =
			[4, 1, 5, 24, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 1, 0, 1, 
		    0, 1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 20, 
		    8, 2, 1, 3, 1, 3, 1, 3, 0, 0, 4, 0, 2, 4, 6, 0, 1, 1, 0, 1, 2, 20, 
		    0, 8, 1, 0, 0, 0, 2, 11, 1, 0, 0, 0, 4, 19, 1, 0, 0, 0, 6, 21, 1, 
		    0, 0, 0, 8, 9, 3, 2, 1, 0, 9, 10, 3, 4, 2, 0, 10, 1, 1, 0, 0, 0, 11, 
		    12, 7, 0, 0, 0, 12, 3, 1, 0, 0, 0, 13, 14, 5, 3, 0, 0, 14, 15, 3, 
		    6, 3, 0, 15, 16, 5, 4, 0, 0, 16, 17, 3, 4, 2, 0, 17, 20, 1, 0, 0, 
		    0, 18, 20, 1, 0, 0, 0, 19, 13, 1, 0, 0, 0, 19, 18, 1, 0, 0, 0, 20, 
		    5, 1, 0, 0, 0, 21, 22, 5, 5, 0, 0, 22, 7, 1, 0, 0, 0, 1, 19];
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
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(8);
		        $this->b();
		        $this->setState(9);
		        $this->c();
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
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(11);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__0 || $_la === self::T__1)) {
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
		public function c(): Context\CContext
		{
		    $localContext = new Context\CContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_c);

		    try {
		        $this->setState(19);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__2:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(13);
		            	$this->match(self::T__2);
		            	$this->setState(14);
		            	$this->n();
		            	$this->setState(15);
		            	$this->match(self::T__3);
		            	$this->setState(16);
		            	$this->c();
		            	break;

		            case self::EOF:
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
		public function n(): Context\NContext
		{
		    $localContext = new Context\NContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_n);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(21);
		        $this->match(self::NUM);
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

	    public function b(): ?BContext
	    {
	    	return $this->getTypedRuleContext(BContext::class, 0);
	    }

	    public function c(): ?CContext
	    {
	    	return $this->getTypedRuleContext(CContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitT($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitB($this);
		    }

			return $visitor->visitChildren($this);
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

	    public function n(): ?NContext
	    {
	    	return $this->getTypedRuleContext(NContext::class, 0);
	    }

	    public function c(): ?CContext
	    {
	    	return $this->getTypedRuleContext(CContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitC($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_n;
	    }

	    public function NUM(): ?TerminalNode
	    {
	        return $this->getToken(GrammarParser::NUM, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitN($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}