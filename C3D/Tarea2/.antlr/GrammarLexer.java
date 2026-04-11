// Generated from /home/isai/Documentos/Github/dragon_examples_antlr4_php/C3D/Tarea2/Grammar.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.Lexer;
import org.antlr.v4.runtime.CharStream;
import org.antlr.v4.runtime.Token;
import org.antlr.v4.runtime.TokenStream;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.misc.*;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue", "this-escape"})
public class GrammarLexer extends Lexer {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		IF=1, ELSE=2, PRINT=3, ADD=4, SUB=5, MUL=6, DIV=7, GEQ=8, LEQ=9, GT=10, 
		LT=11, EQ=12, NEQ=13, ASSIGN=14, LPAREN=15, RPAREN=16, LBRACE=17, RBRACE=18, 
		SEMICOLON=19, NUMBER=20, ID=21, WS=22, COMMENT=23;
	public static String[] channelNames = {
		"DEFAULT_TOKEN_CHANNEL", "HIDDEN"
	};

	public static String[] modeNames = {
		"DEFAULT_MODE"
	};

	private static String[] makeRuleNames() {
		return new String[] {
			"IF", "ELSE", "PRINT", "ADD", "SUB", "MUL", "DIV", "GEQ", "LEQ", "GT", 
			"LT", "EQ", "NEQ", "ASSIGN", "LPAREN", "RPAREN", "LBRACE", "RBRACE", 
			"SEMICOLON", "NUMBER", "ID", "WS", "COMMENT"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'if'", "'else'", "'print'", "'+'", "'-'", "'*'", "'/'", "'>='", 
			"'<='", "'>'", "'<'", "'=='", "'!='", "':='", "'('", "')'", "'{'", "'}'", 
			"';'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, "IF", "ELSE", "PRINT", "ADD", "SUB", "MUL", "DIV", "GEQ", "LEQ", 
			"GT", "LT", "EQ", "NEQ", "ASSIGN", "LPAREN", "RPAREN", "LBRACE", "RBRACE", 
			"SEMICOLON", "NUMBER", "ID", "WS", "COMMENT"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}


	public GrammarLexer(CharStream input) {
		super(input);
		_interp = new LexerATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@Override
	public String getGrammarFileName() { return "Grammar.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public String[] getChannelNames() { return channelNames; }

	@Override
	public String[] getModeNames() { return modeNames; }

	@Override
	public ATN getATN() { return _ATN; }

	public static final String _serializedATN =
		"\u0004\u0000\u0017\u0088\u0006\uffff\uffff\u0002\u0000\u0007\u0000\u0002"+
		"\u0001\u0007\u0001\u0002\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002"+
		"\u0004\u0007\u0004\u0002\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002"+
		"\u0007\u0007\u0007\u0002\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002"+
		"\u000b\u0007\u000b\u0002\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e"+
		"\u0002\u000f\u0007\u000f\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011"+
		"\u0002\u0012\u0007\u0012\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014"+
		"\u0002\u0015\u0007\u0015\u0002\u0016\u0007\u0016\u0001\u0000\u0001\u0000"+
		"\u0001\u0000\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001\u0001"+
		"\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002\u0001\u0002"+
		"\u0001\u0003\u0001\u0003\u0001\u0004\u0001\u0004\u0001\u0005\u0001\u0005"+
		"\u0001\u0006\u0001\u0006\u0001\u0007\u0001\u0007\u0001\u0007\u0001\b\u0001"+
		"\b\u0001\b\u0001\t\u0001\t\u0001\n\u0001\n\u0001\u000b\u0001\u000b\u0001"+
		"\u000b\u0001\f\u0001\f\u0001\f\u0001\r\u0001\r\u0001\r\u0001\u000e\u0001"+
		"\u000e\u0001\u000f\u0001\u000f\u0001\u0010\u0001\u0010\u0001\u0011\u0001"+
		"\u0011\u0001\u0012\u0001\u0012\u0001\u0013\u0004\u0013d\b\u0013\u000b"+
		"\u0013\f\u0013e\u0001\u0013\u0001\u0013\u0004\u0013j\b\u0013\u000b\u0013"+
		"\f\u0013k\u0003\u0013n\b\u0013\u0001\u0014\u0001\u0014\u0005\u0014r\b"+
		"\u0014\n\u0014\f\u0014u\t\u0014\u0001\u0015\u0004\u0015x\b\u0015\u000b"+
		"\u0015\f\u0015y\u0001\u0015\u0001\u0015\u0001\u0016\u0001\u0016\u0001"+
		"\u0016\u0001\u0016\u0005\u0016\u0082\b\u0016\n\u0016\f\u0016\u0085\t\u0016"+
		"\u0001\u0016\u0001\u0016\u0000\u0000\u0017\u0001\u0001\u0003\u0002\u0005"+
		"\u0003\u0007\u0004\t\u0005\u000b\u0006\r\u0007\u000f\b\u0011\t\u0013\n"+
		"\u0015\u000b\u0017\f\u0019\r\u001b\u000e\u001d\u000f\u001f\u0010!\u0011"+
		"#\u0012%\u0013\'\u0014)\u0015+\u0016-\u0017\u0001\u0000\u0005\u0001\u0000"+
		"09\u0003\u0000AZ__az\u0004\u000009AZ__az\u0003\u0000\t\n\r\r  \u0002\u0000"+
		"\n\n\r\r\u008d\u0000\u0001\u0001\u0000\u0000\u0000\u0000\u0003\u0001\u0000"+
		"\u0000\u0000\u0000\u0005\u0001\u0000\u0000\u0000\u0000\u0007\u0001\u0000"+
		"\u0000\u0000\u0000\t\u0001\u0000\u0000\u0000\u0000\u000b\u0001\u0000\u0000"+
		"\u0000\u0000\r\u0001\u0000\u0000\u0000\u0000\u000f\u0001\u0000\u0000\u0000"+
		"\u0000\u0011\u0001\u0000\u0000\u0000\u0000\u0013\u0001\u0000\u0000\u0000"+
		"\u0000\u0015\u0001\u0000\u0000\u0000\u0000\u0017\u0001\u0000\u0000\u0000"+
		"\u0000\u0019\u0001\u0000\u0000\u0000\u0000\u001b\u0001\u0000\u0000\u0000"+
		"\u0000\u001d\u0001\u0000\u0000\u0000\u0000\u001f\u0001\u0000\u0000\u0000"+
		"\u0000!\u0001\u0000\u0000\u0000\u0000#\u0001\u0000\u0000\u0000\u0000%"+
		"\u0001\u0000\u0000\u0000\u0000\'\u0001\u0000\u0000\u0000\u0000)\u0001"+
		"\u0000\u0000\u0000\u0000+\u0001\u0000\u0000\u0000\u0000-\u0001\u0000\u0000"+
		"\u0000\u0001/\u0001\u0000\u0000\u0000\u00032\u0001\u0000\u0000\u0000\u0005"+
		"7\u0001\u0000\u0000\u0000\u0007=\u0001\u0000\u0000\u0000\t?\u0001\u0000"+
		"\u0000\u0000\u000bA\u0001\u0000\u0000\u0000\rC\u0001\u0000\u0000\u0000"+
		"\u000fE\u0001\u0000\u0000\u0000\u0011H\u0001\u0000\u0000\u0000\u0013K"+
		"\u0001\u0000\u0000\u0000\u0015M\u0001\u0000\u0000\u0000\u0017O\u0001\u0000"+
		"\u0000\u0000\u0019R\u0001\u0000\u0000\u0000\u001bU\u0001\u0000\u0000\u0000"+
		"\u001dX\u0001\u0000\u0000\u0000\u001fZ\u0001\u0000\u0000\u0000!\\\u0001"+
		"\u0000\u0000\u0000#^\u0001\u0000\u0000\u0000%`\u0001\u0000\u0000\u0000"+
		"\'c\u0001\u0000\u0000\u0000)o\u0001\u0000\u0000\u0000+w\u0001\u0000\u0000"+
		"\u0000-}\u0001\u0000\u0000\u0000/0\u0005i\u0000\u000001\u0005f\u0000\u0000"+
		"1\u0002\u0001\u0000\u0000\u000023\u0005e\u0000\u000034\u0005l\u0000\u0000"+
		"45\u0005s\u0000\u000056\u0005e\u0000\u00006\u0004\u0001\u0000\u0000\u0000"+
		"78\u0005p\u0000\u000089\u0005r\u0000\u00009:\u0005i\u0000\u0000:;\u0005"+
		"n\u0000\u0000;<\u0005t\u0000\u0000<\u0006\u0001\u0000\u0000\u0000=>\u0005"+
		"+\u0000\u0000>\b\u0001\u0000\u0000\u0000?@\u0005-\u0000\u0000@\n\u0001"+
		"\u0000\u0000\u0000AB\u0005*\u0000\u0000B\f\u0001\u0000\u0000\u0000CD\u0005"+
		"/\u0000\u0000D\u000e\u0001\u0000\u0000\u0000EF\u0005>\u0000\u0000FG\u0005"+
		"=\u0000\u0000G\u0010\u0001\u0000\u0000\u0000HI\u0005<\u0000\u0000IJ\u0005"+
		"=\u0000\u0000J\u0012\u0001\u0000\u0000\u0000KL\u0005>\u0000\u0000L\u0014"+
		"\u0001\u0000\u0000\u0000MN\u0005<\u0000\u0000N\u0016\u0001\u0000\u0000"+
		"\u0000OP\u0005=\u0000\u0000PQ\u0005=\u0000\u0000Q\u0018\u0001\u0000\u0000"+
		"\u0000RS\u0005!\u0000\u0000ST\u0005=\u0000\u0000T\u001a\u0001\u0000\u0000"+
		"\u0000UV\u0005:\u0000\u0000VW\u0005=\u0000\u0000W\u001c\u0001\u0000\u0000"+
		"\u0000XY\u0005(\u0000\u0000Y\u001e\u0001\u0000\u0000\u0000Z[\u0005)\u0000"+
		"\u0000[ \u0001\u0000\u0000\u0000\\]\u0005{\u0000\u0000]\"\u0001\u0000"+
		"\u0000\u0000^_\u0005}\u0000\u0000_$\u0001\u0000\u0000\u0000`a\u0005;\u0000"+
		"\u0000a&\u0001\u0000\u0000\u0000bd\u0007\u0000\u0000\u0000cb\u0001\u0000"+
		"\u0000\u0000de\u0001\u0000\u0000\u0000ec\u0001\u0000\u0000\u0000ef\u0001"+
		"\u0000\u0000\u0000fm\u0001\u0000\u0000\u0000gi\u0005.\u0000\u0000hj\u0007"+
		"\u0000\u0000\u0000ih\u0001\u0000\u0000\u0000jk\u0001\u0000\u0000\u0000"+
		"ki\u0001\u0000\u0000\u0000kl\u0001\u0000\u0000\u0000ln\u0001\u0000\u0000"+
		"\u0000mg\u0001\u0000\u0000\u0000mn\u0001\u0000\u0000\u0000n(\u0001\u0000"+
		"\u0000\u0000os\u0007\u0001\u0000\u0000pr\u0007\u0002\u0000\u0000qp\u0001"+
		"\u0000\u0000\u0000ru\u0001\u0000\u0000\u0000sq\u0001\u0000\u0000\u0000"+
		"st\u0001\u0000\u0000\u0000t*\u0001\u0000\u0000\u0000us\u0001\u0000\u0000"+
		"\u0000vx\u0007\u0003\u0000\u0000wv\u0001\u0000\u0000\u0000xy\u0001\u0000"+
		"\u0000\u0000yw\u0001\u0000\u0000\u0000yz\u0001\u0000\u0000\u0000z{\u0001"+
		"\u0000\u0000\u0000{|\u0006\u0015\u0000\u0000|,\u0001\u0000\u0000\u0000"+
		"}~\u0005/\u0000\u0000~\u007f\u0005/\u0000\u0000\u007f\u0083\u0001\u0000"+
		"\u0000\u0000\u0080\u0082\b\u0004\u0000\u0000\u0081\u0080\u0001\u0000\u0000"+
		"\u0000\u0082\u0085\u0001\u0000\u0000\u0000\u0083\u0081\u0001\u0000\u0000"+
		"\u0000\u0083\u0084\u0001\u0000\u0000\u0000\u0084\u0086\u0001\u0000\u0000"+
		"\u0000\u0085\u0083\u0001\u0000\u0000\u0000\u0086\u0087\u0006\u0016\u0000"+
		"\u0000\u0087.\u0001\u0000\u0000\u0000\u0007\u0000ekmsy\u0083\u0001\u0006"+
		"\u0000\u0000";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}