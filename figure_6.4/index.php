<?php

// Autoload de Composer y carga de clases generadas/personalizadas
require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/GrammarLexer.php';
require_once __DIR__ . '/GrammarParser.php';
require_once __DIR__ . '/GrammarListener.php';
require_once __DIR__ . '/GrammarBaseListener.php';
require_once __DIR__ . '/ASTListener.php';
require_once __DIR__ . '/Tree.php';

use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;

// 1. Captura de la entrada desde la línea de comandos
$input = $argv[1] ?? null;

if (!$input) {
    echo "Usage: php index.php \"1+2*3\"\n";
    exit(1);
}

// 2. Configuración del Lexer y Parser de ANTLR
$stream = InputStream::fromString($input);
$lexer = new GrammarLexer($stream);
$tokens = new CommonTokenStream($lexer);
$parser = new GrammarParser($tokens);

// Se genera el árbol de parseo inicial (regla 'e')
$tree = $parser->e();

// 3. Ejecución del ASTListener para construir el árbol de sintaxis abstracta
$listener = new ASTListener();
ParseTreeWalker::default()->walk($listener, $tree);

// 4. Obtención del nodo raíz del AST
$root = $listener->getResult();

// 5. Procesamiento del árbol con la clase Tree
$astTree = new Tree();
$astTree->root = $root;

echo "Inorder: ";
$astTree->inOrder($root);
echo "\n";

echo "Postorder: ";
$astTree->postOrder($root);
echo "\n";

// Cerrar la estructura del grafo DOT
$astTree->dot .= "}";
echo "DOT:\n" . $astTree->dot . "\n";

// 6. Generación de la imagen PNG usando el comando 'dot' del sistema
$outputPng = "output.png";

$cmd = "echo " . escapeshellarg($astTree->dot) . " | dot -Tpng -o " . escapeshellarg($outputPng);

exec($cmd, $output, $returnVar);

if ($returnVar === 0) {
    echo "PNG generated successfully\n";
} else {
    echo "Error generating PNG\n";
}