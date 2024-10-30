<?php

/*
$number = array(12,13,14,15,16,17,18,19,20);
print_r($number);
*/

/*
$number = array();
for($i=12;$i<21;$i++){
    array_push($number, $i);
}
print_r($number);
*/


$number = range(12, 20);
print_r($number);
echo PHP_EOL;


//for even number
$number = range(12, 20, 2);
print_r($number);
echo PHP_EOL;

//for even number
foreach (range(12, 20, 2) as $evenNumber) {
    echo $evenNumber . "\n";
}
echo PHP_EOL;


//for odd number
$number = range(11, 20, 2);
print_r($number);
echo PHP_EOL;


//for even number
foreach (range(11, 20, 2) as $oddNumber) {
    echo $oddNumber . "\n";
}
echo PHP_EOL;

foreach (range(0, 50, 7) as $number) {
    if ($number > 0) {
        echo $number . "\n";
    }
}
echo PHP_EOL;


foreach (range(0, 60, 11) as $number) {
    if ($number > 0) {
        echo $number . "\n";
    }
}
echo PHP_EOL;


foreach (range(0, 10, 2) as $number) {
    echo $number . "\n";
}

// practise
$n1 = array();
for ($i = 12; $i < 21; $i++) {
    array_push($n1, $i);
}
print_r($n1);
