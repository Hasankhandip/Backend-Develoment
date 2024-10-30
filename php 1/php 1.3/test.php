<?php

$task = "Read";
echo $task;
echo "\n";
$task = "Write";
echo $task;
echo "\n";

// echo "\n" bar bar na likhe echo "{$task}\n" evabe lekha jay
$task = "Read";
echo "{$task}\n";
$task = "Write";
echo "{$task}\n";


define("PI", 3.1416);

echo "Value of PI = " . PI;
echo "\n";
echo constant("PI");
$constant = "constant";
echo "\n";
echo "Value of PI = {$constant("PI")}";
