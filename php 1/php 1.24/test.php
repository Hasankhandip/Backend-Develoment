<?php

$n = 3;
for ($i = $n, $factorial = 1; $i > 1; $i--) {
    $factorial = $factorial * $i;
    // $factorial *= $i;
}
printf("Factorial of %d is %d", $n, $factorial);


// practise
echo PHP_EOL;
$n = 6;
for ($i = $n, $factorial = 1; $i > 1; $i--) {
    $factorial = $factorial * $i;
}
printf("Factorial of %d is %d", $n, $factorial);
