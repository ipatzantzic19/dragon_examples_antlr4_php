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
		public const T__0 = 1, T__1 = 2;

		public const RULE_b = 0, RULE_bp = 1;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'b', 'bp'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'1'", "'0'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		];

		private const SERIALIZED_ATN =
			[4, 1, 2, 15, 2, 0, 7, 0, 2, 1, 7, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 3, 1, 13, 8, 1, 1, 1, 0, 0, 2, 0, 2, 0, 0, 14, 0, 4, 
		    1, 0, 0, 0, 2, 12, 1, 0, 0, 0, 4, 5, 5, 1, 0, 0, 5, 6, 3, 2, 1, 0, 
		    6, 1, 1, 0, 0, 0, 7, 8, 5, 2, 0, 0, 8, 13, 3, 2, 1, 0, 9, 10, 5, 1, 
		    0, 0, 10, 13, 3, 2, 1, 0, 11, 13, 1, 0, 0, 0, 12, 7, 1, 0, 0, 0, 12, 
		    9, 1, 0, 0, 0, 12, 11, 1, 0, 0, 0, 13, 3, 1, 0, 0, 0, 1, 12];
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
		public function b(): Context\BContext
		{
		    $localContext = new Context\BContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_b);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(4);
		        $this->match(self::T__0);
		        $this->setState(5);
		        $this->bp();
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
		public function bp(): Context\BpContext
		{
		    $localContext = new Context\BpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_bp);

		    try {
		        $this->setState(12);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__1:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(7);
		            	$this->match(self::T__1);
		            	$this->setState(8);
		            	$this->bp();
		            	break;

		            case self::T__0:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(9);
		            	$this->match(self::T__0);
		            	$this->setState(10);
		            	$this->bp();
		            	break;

		            case self::EOF:
		            	$this->enterOuterAlt($localContext, 3);

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

	    public function bp(): ?BpContext
	    {
	    	return $this->getTypedRuleContext(BpContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitB($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GrammarParser::RULE_bp;
	    }

	    public function bp(): ?BpContext
	    {
	    	return $this->getTypedRuleContext(BpContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GrammarVisitor) {
			    return $visitor->visitBp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}