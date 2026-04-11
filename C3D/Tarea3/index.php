<?php
/**
 * index.php
 * Punto de entrada para la Tarea 3 – OLC2.
 *
 * Instalación del runtime:
 *   composer require antlr/antlr4-php-runtime
 *
 * Compilar la gramática:
 *   java -jar antlr-4.13.1-complete.jar -Dlanguage=PHP -visitor Grammar.g4
 *
 * Ejecutar:
 *   php index.php
 *
 * OLC2 - Tarea 3 | Universidad San Carlos de Guatemala
 */

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/GrammarLexer.php';
require_once __DIR__ . '/GrammarParser.php';
require_once __DIR__ . '/GrammarVisitor.php';
require_once __DIR__ . '/GrammarBaseVisitor.php';
require_once __DIR__ . '/C3DGenerator.php';
require_once __DIR__ . '/C3DVisitor.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;

/**
 * Compila un fragmento de código fuente e imprime el C3D generado.
 */
function compilar(string $fuente): void
{
    $input   = InputStream::fromString($fuente);
    $lexer   = new GrammarLexer($input);
    $tokens  = new CommonTokenStream($lexer);
    $parser  = new GrammarParser($tokens);

    $tree    = $parser->program();
    $visitor = new C3DVisitor();
    $visitor->visit($tree);
    $visitor->getGenerator()->printC3D();
}

// ============================================================
// CASO 1 – if con operador lógico && (AND) con cortocircuito
// ============================================================
echo "============================================================\n";
echo "CASO 1 – if-else con condición AND (&&) y cortocircuito\n";
echo "Entrada:\n";
echo "    if 8 > 7 && 9 > 3 {\n";
echo "        print(\"Verdadero\")\n";
echo "    } else {\n";
echo "        print(\"Falso\")\n";
echo "    }\n";
echo "============================================================\n";

compilar(<<<'CODE'
if 8 > 7 && 9 > 3 {
    print("Verdadero")
} else {
    print("Falso")
}
CODE);

// ============================================================
// CASO 2 – if con operador lógico || (OR) con cortocircuito
// ============================================================
echo "============================================================\n";
echo "CASO 2 – if-else con condición OR (||) y cortocircuito\n";
echo "Entrada:\n";
echo "    if 8 < 7 || 9 > 3 {\n";
echo "        print(\"Verdadero\")\n";
echo "    } else {\n";
echo "        print(\"Falso\")\n";
echo "    }\n";
echo "============================================================\n";

compilar(<<<'CODE'
if 8 < 7 || 9 > 3 {
    print("Verdadero")
} else {
    print("Falso")
}
CODE);