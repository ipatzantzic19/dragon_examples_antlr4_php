#!/bin/sh

cd "$(dirname "$0")"

php index.php "int"

php index.php "float"

php index.php "int[2]"

php index.php "int[2][3]"