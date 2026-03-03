<?php
require __DIR__ . '/../vendor/autoload.php';
require_once 'GrammarLexer.php';
require_once 'GrammarParser.php';
require_once 'GrammarVisitor.php';
require_once 'GrammarBaseVisitor.php';
require_once 'EvalVisitor.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;

// Obtener la entrada desde los argumentos de la línea de comandos
$input = InputStream::fromString($argv[1]);
$lexer = new GrammarLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new GrammarParser($tokens);

// Crear el árbol de análisis desde la producción inicial 'line'
$tree = $parser->line();

// Ejecutar el visitor
$visitor = new EvalVisitor();
$visitor->visit($tree);