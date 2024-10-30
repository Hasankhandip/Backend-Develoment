<?php

$fruits = array('a' => 'Arrray', 'b' => 'Banana', 'c' => 'Curry', 'd' => 'Dates');
$_fruits = $fruits;

shuffle($_fruits);
print_r($_fruits);

/*
shuffle($fruits);
print_r($fruits);
*/

$key = array_rand($fruits);
echo $key;
echo PHP_EOL;

echo $fruits[$key];
