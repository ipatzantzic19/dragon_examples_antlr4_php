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
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               ID = 7, NUM = 8, WS = 9;

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
			'T__0', 'T__1', 'T__2', 'T__3', 'T__4', 'T__5', 'ID', 'NUM', 'WS'
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
			[4, 0, 9, 50, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 1, 0, 
		    1, 0, 1, 1, 1, 1, 1, 2, 1, 2, 1, 3, 1, 3, 1, 4, 1, 4, 1, 5, 1, 5, 
		    1, 6, 1, 6, 5, 6, 34, 8, 6, 10, 6, 12, 6, 37, 9, 6, 1, 7, 4, 7, 40, 
		    8, 7, 11, 7, 12, 7, 41, 1, 8, 4, 8, 45, 8, 8, 11, 8, 12, 8, 46, 1, 
		    8, 1, 8, 0, 0, 9, 1, 1, 3, 2, 5, 3, 7, 4, 9, 5, 11, 6, 13, 7, 15, 
		    8, 17, 9, 1, 0, 4, 3, 0, 65, 90, 95, 95, 97, 122, 4, 0, 48, 57, 65, 
		    90, 95, 95, 97, 122, 1, 0, 48, 57, 3, 0, 9, 10, 13, 13, 32, 32, 52, 
		    0, 1, 1, 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 
		    0, 0, 0, 9, 1, 0, 0, 0, 0, 11, 1, 0, 0, 0, 0, 13, 1, 0, 0, 0, 0, 15, 
		    1, 0, 0, 0, 0, 17, 1, 0, 0, 0, 1, 19, 1, 0, 0, 0, 3, 21, 1, 0, 0, 
		    0, 5, 23, 1, 0, 0, 0, 7, 25, 1, 0, 0, 0, 9, 27, 1, 0, 0, 0, 11, 29, 
		    1, 0, 0, 0, 13, 31, 1, 0, 0, 0, 15, 39, 1, 0, 0, 0, 17, 44, 1, 0, 
		    0, 0, 19, 20, 5, 43, 0, 0, 20, 2, 1, 0, 0, 0, 21, 22, 5, 45, 0, 0, 
		    22, 4, 1, 0, 0, 0, 23, 24, 5, 42, 0, 0, 24, 6, 1, 0, 0, 0, 25, 26, 
		    5, 47, 0, 0, 26, 8, 1, 0, 0, 0, 27, 28, 5, 40, 0, 0, 28, 10, 1, 0, 
		    0, 0, 29, 30, 5, 41, 0, 0, 30, 12, 1, 0, 0, 0, 31, 35, 7, 0, 0, 0, 
		    32, 34, 7, 1, 0, 0, 33, 32, 1, 0, 0, 0, 34, 37, 1, 0, 0, 0, 35, 33, 
		    1, 0, 0, 0, 35, 36, 1, 0, 0, 0, 36, 14, 1, 0, 0, 0, 37, 35, 1, 0, 
		    0, 0, 38, 40, 7, 2, 0, 0, 39, 38, 1, 0, 0, 0, 40, 41, 1, 0, 0, 0, 
		    41, 39, 1, 0, 0, 0, 41, 42, 1, 0, 0, 0, 42, 16, 1, 0, 0, 0, 43, 45, 
		    7, 3, 0, 0, 44, 43, 1, 0, 0, 0, 45, 46, 1, 0, 0, 0, 46, 44, 1, 0, 
		    0, 0, 46, 47, 1, 0, 0, 0, 47, 48, 1, 0, 0, 0, 48, 49, 6, 8, 0, 0, 
		    49, 18, 1, 0, 0, 0, 4, 0, 35, 41, 46, 1, 6, 0, 0];
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