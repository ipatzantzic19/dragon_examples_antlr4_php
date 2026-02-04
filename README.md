# dragon_examples_antlr4_php
Implementación de los algoritmos y conceptos del libro 'Compilers: Principles, Techniques, and Tools' (Dragon Book) utilizando ANTLR4 como generador de parsers y PHP 8.x. El proyecto explora la construcción de ASTs y recorridos mediante patrones Visitor y Listener.

## Cómo empezar un nuevo ejemplo

Sigue estos pasos para configurar un nuevo directorio de ejemplo para un nuevo análisis gramatical.

### 1. Prerrequisitos

Asegúrate de tener PHP, Composer y Java instalados en tu sistema.

Debes tener el archivo `antlr-4.13.1-complete.jar` en el directorio raíz del proyecto.

### 2. Instalación de dependencias

Si es la primera vez que clonas el repositorio, ejecuta el siguiente comando para instalar las dependencias de PHP necesarias:

```bash
composer install
```

### 3. Crear un nuevo directorio de ejemplo

Crea un nuevo directorio dentro del proyecto, por ejemplo `mi_nuevo_ejemplo/`.

```bash
mkdir mi_nuevo_ejemplo
cd mi_nuevo_ejemplo
```

### 4. Crear el archivo de gramática

Dentro del nuevo directorio, crea un archivo `Grammar.g4` con las reglas de tu gramática.

### 5. Generar los archivos del Parser

Dependiendo de si quieres usar el patrón Visitor o Listener, ejecuta uno de los siguientes comandos desde el directorio de tu nuevo ejemplo.

#### Usando el patrón Visitor

Este enfoque es útil cuando necesitas controlar explícitamente el recorrido del árbol y retornar valores de las visitas.

Ejecuta el siguiente comando para generar las clases base, incluyendo un `Visitor`.

```bash
java -jar ../antlr-4.13.1-complete.jar -Dlanguage=PHP -visitor Grammar.g4
```

Esto generará los siguientes archivos:
- `GrammarLexer.php`
- `GrammarParser.php`
- `GrammarListener.php` y `GrammarBaseListener.php`
- `GrammarVisitor.php` y `GrammarBaseVisitor.php`

Luego, crea tu propia clase Visitor que extienda de `GrammarBaseVisitor.php` e implementa los métodos `visit...()` que necesites.

#### Usando el patrón Listener

Este enfoque es útil para ejecutar acciones cuando el `ParseTreeWalker` recorre el árbol. No se retornan valores de los métodos.

Ejecuta el siguiente comando para generar las clases base.

```bash
java -jar ../antlr-4.13.1-complete.jar -Dlanguage=PHP Grammar.g4
```

Esto generará los siguientes archivos:
- `GrammarLexer.php`
- `GrammarParser.php`
- `GrammarListener.php` y `GrammarBaseListener.php`

Luego, crea tu propia clase Listener que extienda de `GrammarBaseListener.php` e implementa los métodos `enter...()` y `exit...()` que necesites.

### 6. Crear el archivo de entrada (index.php)

Crea un archivo `index.php` para probar tu gramática. Este archivo típicamente contendrá:

1.  La carga del `autoload.php` de Composer.
2.  La creación de un `InputStream` a partir de una cadena de entrada.
3.  La creación de un `GrammarLexer`.
4.  La creación de un `CommonTokenStream`.
5.  La creación de un `GrammarParser`.
6.  La llamada a la regla inicial de tu gramática para obtener el árbol de sintaxis (`$tree`).
7.  La creación de una instancia de tu Visitor o Listener personalizado.
8.  El recorrido del árbol usando tu Visitor (`$visitor->visit($tree)`) o un `ParseTreeWalker` con tu Listener (`$walker->walk($listener, $tree)`).

```php
<?php
// index.php

require_once __DIR__ . '/../vendor/autoload.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;

// 1. Obtener la entrada del usuario
$input = InputStream::fromPath($argv[1]);

// 2. Crear Lexer
$lexer = new GrammarLexer($input);
$tokens = new CommonTokenStream($lexer);

// 3. Crear Parser
$parser = new GrammarParser($tokens);
$tree = $parser->{tu_regla_inicial}(); // Reemplaza {tu_regla_inicial}

// 4. Usar Visitor o Listener
// Para Visitor:
// $visitor = new MiVisitor();
// $visitor->visit($tree);

// Para Listener:
// $listener = new MiListener();
// $walker = new ParseTreeWalker();
// $walker->walk($listener, $tree);
```
