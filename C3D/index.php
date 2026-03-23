<?php
/**
 * main.php
 * Punto de entrada. Usa el runtime de ANTLR4 para PHP.
 *
 * Instalación del runtime:
 *   composer require antlr/antlr4-php-runtime
 *
 * Compilar la gramática (genera los archivos base):
 *   java -jar antlr-4.13.1-complete.jar -Dlanguage=PHP -visitor Grammar.g4
 *
 * Ejecutar:
 *   php main.php
 *
 * OLC2 - Tarea 2 | Universidad San Carlos de Guatemala
 */

require_once __DIR__ . '/../vendor/autoload.php';  // ANTLR4 PHP runtime (composer)
require_once __DIR__ . '/GrammarLexer.php';     // generado por ANTLR
require_once __DIR__ . '/GrammarParser.php';    // generado por ANTLR
require_once __DIR__ . '/GrammarVisitor.php';   // generado por ANTLR
require_once __DIR__ . '/GrammarBaseVisitor.php'; // generado por ANTLR
require_once __DIR__ . '/C3DGenerator.php';
require_once __DIR__ . '/C3DVisitor.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;

/**
 * Función auxiliar: dado un string de código fuente,
 * corre el pipeline ANTLR completo y retorna el C3D generado.
 */
function compilar(string $fuente): void
{
    $input  = InputStream::fromString($fuente);
    $lexer  = new GrammarLexer($input);
    $tokens = new CommonTokenStream($lexer);
    $parser = new GrammarParser($tokens);

    $tree    = $parser->program();   // inicia el parseo desde la regla raíz
    $visitor = new C3DVisitor();
    $visitor->visit($tree);
    $visitor->getGenerator()->printC3D();
}

// ============================================================
// CASO 1 – Expresiones Aritméticas
// ============================================================
echo "============================================================\n";
echo "CASO 1 – Expresiones Aritméticas\n";
echo "Entrada:\n";
echo "    a := (2 + 2) * 3 / 1 - 2\n";
echo "    print(a)\n";
echo "============================================================\n";

compilar(<<<CODE
a := (2 + 2) * 3 / 1 - 2
print(a)
CODE);

// ============================================================
// CASO 2 – Estructura de Control If-Else
// ============================================================
echo "============================================================\n";
echo "CASO 2 – Estructura de Control If-Else\n";
echo "Entrada:\n";
echo "    b := 10\n";
echo "    if (b > 5) {\n";
echo "        c := b * 2\n";
echo "        print(c)\n";
echo "    } else {\n";
echo "        c := b + 1\n";
echo "        print(c)\n";
echo "    }\n";
echo "============================================================\n";

compilar(<<<CODE
b := 10
if (b > 5) {
    c := b * 2
    print(c)
} else {
    c := b + 1
    print(c)
}
CODE
);