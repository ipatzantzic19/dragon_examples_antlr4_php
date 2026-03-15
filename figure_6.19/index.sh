#!/bin/sh

cd "$(dirname "$0")"

#php index.php "a = 1  b = 2 * a"

#php index.php "a = 1  b = 2  c = a + b * 2"

php index.php "a = 1  b = 2  c = a + b * 2  d = (c + 1) * 3"