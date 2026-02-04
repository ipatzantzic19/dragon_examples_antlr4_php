<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/GrammarLexer.php';
require_once __DIR__ . '/GrammarParser.php';
require_once __DIR__ . '/GrammarListener.php';
require_once __DIR__ . '/GrammarBaseListener.php';
require_once __DIR__ . '/EvalListener.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
 

$input = $argv[1] ?? null;

if (!$input) {
    echo "Usage: php index.php \"expression\"\n";
    exit(1);
}

$stream = InputStream::fromString($input);
$lexer = new GrammarLexer($stream);
$tokens = new CommonTokenStream($lexer);
$parser = new GrammarParser($tokens);

$tree = $parser->l();

$listener = new EvalListener();
ParseTreeWalker::default()->walk($listener, $tree);

echo $listener->getResult() . "\n";
