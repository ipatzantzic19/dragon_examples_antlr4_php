<?php
// figure-6-15 > index.php

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/GrammarLexer.php';
require_once __DIR__ . '/GrammarParser.php';
require_once __DIR__ . '/GrammarListener.php';
require_once __DIR__ . '/GrammarBaseListener.php';
require_once __DIR__ . '/EvalVisitor.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;

$input = $argv[1] ?? null;

if (!$input) {
    echo "Usage: php index.php \"code\"\n";
    exit(1);
}

$stream = InputStream::fromString($input);
$lexer = new GrammarLexer($stream);
$tokens = new CommonTokenStream($lexer);
$parser = new GrammarParser($tokens);

$tree = $parser->t();

$listener = new EvalVisitor();
$walker = new ParseTreeWalker();
$walker->walk($listener, $tree);