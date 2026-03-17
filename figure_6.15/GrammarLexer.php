<?php

/*
 * Generated from Grammar.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class GrammarLexer extends Lexer
	{
		public const INT = 1, FLOAT = 2, LBRACK = 3, RBRACK = 4, NUMBER = 5, WS = 6;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'INT', 'FLOAT', 'LBRACK', 'RBRACK', 'NUMBER', 'WS'
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
			[4, 0, 6, 39, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 3, 1, 3, 1, 4, 4, 4, 29, 8, 4, 11, 
		    4, 12, 4, 30, 1, 5, 4, 5, 34, 8, 5, 11, 5, 12, 5, 35, 1, 5, 1, 5, 
		    0, 0, 6, 1, 1, 3, 2, 5, 3, 7, 4, 9, 5, 11, 6, 1, 0, 2, 1, 0, 48, 57, 
		    3, 0, 9, 10, 13, 13, 32, 32, 40, 0, 1, 1, 0, 0, 0, 0, 3, 1, 0, 0, 
		    0, 0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 0, 0, 0, 9, 1, 0, 0, 0, 0, 11, 1, 
		    0, 0, 0, 1, 13, 1, 0, 0, 0, 3, 17, 1, 0, 0, 0, 5, 23, 1, 0, 0, 0, 
		    7, 25, 1, 0, 0, 0, 9, 28, 1, 0, 0, 0, 11, 33, 1, 0, 0, 0, 13, 14, 
		    5, 105, 0, 0, 14, 15, 5, 110, 0, 0, 15, 16, 5, 116, 0, 0, 16, 2, 1, 
		    0, 0, 0, 17, 18, 5, 102, 0, 0, 18, 19, 5, 108, 0, 0, 19, 20, 5, 111, 
		    0, 0, 20, 21, 5, 97, 0, 0, 21, 22, 5, 116, 0, 0, 22, 4, 1, 0, 0, 0, 
		    23, 24, 5, 91, 0, 0, 24, 6, 1, 0, 0, 0, 25, 26, 5, 93, 0, 0, 26, 8, 
		    1, 0, 0, 0, 27, 29, 7, 0, 0, 0, 28, 27, 1, 0, 0, 0, 29, 30, 1, 0, 
		    0, 0, 30, 28, 1, 0, 0, 0, 30, 31, 1, 0, 0, 0, 31, 10, 1, 0, 0, 0, 
		    32, 34, 7, 1, 0, 0, 33, 32, 1, 0, 0, 0, 34, 35, 1, 0, 0, 0, 35, 33, 
		    1, 0, 0, 0, 35, 36, 1, 0, 0, 0, 36, 37, 1, 0, 0, 0, 37, 38, 6, 5, 
		    0, 0, 38, 12, 1, 0, 0, 0, 3, 0, 30, 35, 1, 6, 0, 0];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public static function vocabulary(): Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName(): string
		{
			return 'Grammar.g4';
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames(): array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames(): array
		{
			return self::MODE_NAMES;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
		{
			return self::vocabulary();
		}
	}
}