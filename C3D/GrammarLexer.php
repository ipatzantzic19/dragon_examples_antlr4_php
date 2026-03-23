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
		public const IF = 1, ELSE = 2, PRINT = 3, ADD = 4, SUB = 5, MUL = 6, DIV = 7, 
               GEQ = 8, LEQ = 9, GT = 10, LT = 11, EQ = 12, NEQ = 13, ASSIGN = 14, 
               LPAREN = 15, RPAREN = 16, LBRACE = 17, RBRACE = 18, SEMICOLON = 19, 
               NUMBER = 20, ID = 21, WS = 22, COMMENT = 23;

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
			'IF', 'ELSE', 'PRINT', 'ADD', 'SUB', 'MUL', 'DIV', 'GEQ', 'LEQ', 'GT', 
			'LT', 'EQ', 'NEQ', 'ASSIGN', 'LPAREN', 'RPAREN', 'LBRACE', 'RBRACE', 
			'SEMICOLON', 'NUMBER', 'ID', 'WS', 'COMMENT'
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
			[4, 0, 23, 136, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 
		    7, 9, 2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 
		    7, 14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 
		    19, 7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 1, 0, 1, 0, 1, 
		    0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 
		    2, 1, 3, 1, 3, 1, 4, 1, 4, 1, 5, 1, 5, 1, 6, 1, 6, 1, 7, 1, 7, 1, 
		    7, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 
		    1, 12, 1, 12, 1, 12, 1, 13, 1, 13, 1, 13, 1, 14, 1, 14, 1, 15, 1, 
		    15, 1, 16, 1, 16, 1, 17, 1, 17, 1, 18, 1, 18, 1, 19, 4, 19, 100, 8, 
		    19, 11, 19, 12, 19, 101, 1, 19, 1, 19, 4, 19, 106, 8, 19, 11, 19, 
		    12, 19, 107, 3, 19, 110, 8, 19, 1, 20, 1, 20, 5, 20, 114, 8, 20, 10, 
		    20, 12, 20, 117, 9, 20, 1, 21, 4, 21, 120, 8, 21, 11, 21, 12, 21, 
		    121, 1, 21, 1, 21, 1, 22, 1, 22, 1, 22, 1, 22, 5, 22, 130, 8, 22, 
		    10, 22, 12, 22, 133, 9, 22, 1, 22, 1, 22, 0, 0, 23, 1, 1, 3, 2, 5, 
		    3, 7, 4, 9, 5, 11, 6, 13, 7, 15, 8, 17, 9, 19, 10, 21, 11, 23, 12, 
		    25, 13, 27, 14, 29, 15, 31, 16, 33, 17, 35, 18, 37, 19, 39, 20, 41, 
		    21, 43, 22, 45, 23, 1, 0, 5, 1, 0, 48, 57, 3, 0, 65, 90, 95, 95, 97, 
		    122, 4, 0, 48, 57, 65, 90, 95, 95, 97, 122, 3, 0, 9, 10, 13, 13, 32, 
		    32, 2, 0, 10, 10, 13, 13, 141, 0, 1, 1, 0, 0, 0, 0, 3, 1, 0, 0, 0, 
		    0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 0, 0, 0, 9, 1, 0, 0, 0, 0, 11, 1, 0, 
		    0, 0, 0, 13, 1, 0, 0, 0, 0, 15, 1, 0, 0, 0, 0, 17, 1, 0, 0, 0, 0, 
		    19, 1, 0, 0, 0, 0, 21, 1, 0, 0, 0, 0, 23, 1, 0, 0, 0, 0, 25, 1, 0, 
		    0, 0, 0, 27, 1, 0, 0, 0, 0, 29, 1, 0, 0, 0, 0, 31, 1, 0, 0, 0, 0, 
		    33, 1, 0, 0, 0, 0, 35, 1, 0, 0, 0, 0, 37, 1, 0, 0, 0, 0, 39, 1, 0, 
		    0, 0, 0, 41, 1, 0, 0, 0, 0, 43, 1, 0, 0, 0, 0, 45, 1, 0, 0, 0, 1, 
		    47, 1, 0, 0, 0, 3, 50, 1, 0, 0, 0, 5, 55, 1, 0, 0, 0, 7, 61, 1, 0, 
		    0, 0, 9, 63, 1, 0, 0, 0, 11, 65, 1, 0, 0, 0, 13, 67, 1, 0, 0, 0, 15, 
		    69, 1, 0, 0, 0, 17, 72, 1, 0, 0, 0, 19, 75, 1, 0, 0, 0, 21, 77, 1, 
		    0, 0, 0, 23, 79, 1, 0, 0, 0, 25, 82, 1, 0, 0, 0, 27, 85, 1, 0, 0, 
		    0, 29, 88, 1, 0, 0, 0, 31, 90, 1, 0, 0, 0, 33, 92, 1, 0, 0, 0, 35, 
		    94, 1, 0, 0, 0, 37, 96, 1, 0, 0, 0, 39, 99, 1, 0, 0, 0, 41, 111, 1, 
		    0, 0, 0, 43, 119, 1, 0, 0, 0, 45, 125, 1, 0, 0, 0, 47, 48, 5, 105, 
		    0, 0, 48, 49, 5, 102, 0, 0, 49, 2, 1, 0, 0, 0, 50, 51, 5, 101, 0, 
		    0, 51, 52, 5, 108, 0, 0, 52, 53, 5, 115, 0, 0, 53, 54, 5, 101, 0, 
		    0, 54, 4, 1, 0, 0, 0, 55, 56, 5, 112, 0, 0, 56, 57, 5, 114, 0, 0, 
		    57, 58, 5, 105, 0, 0, 58, 59, 5, 110, 0, 0, 59, 60, 5, 116, 0, 0, 
		    60, 6, 1, 0, 0, 0, 61, 62, 5, 43, 0, 0, 62, 8, 1, 0, 0, 0, 63, 64, 
		    5, 45, 0, 0, 64, 10, 1, 0, 0, 0, 65, 66, 5, 42, 0, 0, 66, 12, 1, 0, 
		    0, 0, 67, 68, 5, 47, 0, 0, 68, 14, 1, 0, 0, 0, 69, 70, 5, 62, 0, 0, 
		    70, 71, 5, 61, 0, 0, 71, 16, 1, 0, 0, 0, 72, 73, 5, 60, 0, 0, 73, 
		    74, 5, 61, 0, 0, 74, 18, 1, 0, 0, 0, 75, 76, 5, 62, 0, 0, 76, 20, 
		    1, 0, 0, 0, 77, 78, 5, 60, 0, 0, 78, 22, 1, 0, 0, 0, 79, 80, 5, 61, 
		    0, 0, 80, 81, 5, 61, 0, 0, 81, 24, 1, 0, 0, 0, 82, 83, 5, 33, 0, 0, 
		    83, 84, 5, 61, 0, 0, 84, 26, 1, 0, 0, 0, 85, 86, 5, 58, 0, 0, 86, 
		    87, 5, 61, 0, 0, 87, 28, 1, 0, 0, 0, 88, 89, 5, 40, 0, 0, 89, 30, 
		    1, 0, 0, 0, 90, 91, 5, 41, 0, 0, 91, 32, 1, 0, 0, 0, 92, 93, 5, 123, 
		    0, 0, 93, 34, 1, 0, 0, 0, 94, 95, 5, 125, 0, 0, 95, 36, 1, 0, 0, 0, 
		    96, 97, 5, 59, 0, 0, 97, 38, 1, 0, 0, 0, 98, 100, 7, 0, 0, 0, 99, 
		    98, 1, 0, 0, 0, 100, 101, 1, 0, 0, 0, 101, 99, 1, 0, 0, 0, 101, 102, 
		    1, 0, 0, 0, 102, 109, 1, 0, 0, 0, 103, 105, 5, 46, 0, 0, 104, 106, 
		    7, 0, 0, 0, 105, 104, 1, 0, 0, 0, 106, 107, 1, 0, 0, 0, 107, 105, 
		    1, 0, 0, 0, 107, 108, 1, 0, 0, 0, 108, 110, 1, 0, 0, 0, 109, 103, 
		    1, 0, 0, 0, 109, 110, 1, 0, 0, 0, 110, 40, 1, 0, 0, 0, 111, 115, 7, 
		    1, 0, 0, 112, 114, 7, 2, 0, 0, 113, 112, 1, 0, 0, 0, 114, 117, 1, 
		    0, 0, 0, 115, 113, 1, 0, 0, 0, 115, 116, 1, 0, 0, 0, 116, 42, 1, 0, 
		    0, 0, 117, 115, 1, 0, 0, 0, 118, 120, 7, 3, 0, 0, 119, 118, 1, 0, 
		    0, 0, 120, 121, 1, 0, 0, 0, 121, 119, 1, 0, 0, 0, 121, 122, 1, 0, 
		    0, 0, 122, 123, 1, 0, 0, 0, 123, 124, 6, 21, 0, 0, 124, 44, 1, 0, 
		    0, 0, 125, 126, 5, 47, 0, 0, 126, 127, 5, 47, 0, 0, 127, 131, 1, 0, 
		    0, 0, 128, 130, 8, 4, 0, 0, 129, 128, 1, 0, 0, 0, 130, 133, 1, 0, 
		    0, 0, 131, 129, 1, 0, 0, 0, 131, 132, 1, 0, 0, 0, 132, 134, 1, 0, 
		    0, 0, 133, 131, 1, 0, 0, 0, 134, 135, 6, 22, 0, 0, 135, 46, 1, 0, 
		    0, 0, 7, 0, 101, 107, 109, 115, 121, 131, 1, 6, 0, 0];
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