<?php

for ($i = 10; $i > 0; $i -= 1) {
    echo $i;
    echo PHP_EOL;
}

echo PHP_EOL;

for ($a = 10; $a > 0; $a -= 1) {
    echo $a . ":" . (10 - $a);
    echo PHP_EOL;
}

echo PHP_EOL;

for ($b = 10, $c = 0; $b > 0; $b -= 1, $c += 1) {
    echo $b . ":" . $c;
    echo PHP_EOL;
}
