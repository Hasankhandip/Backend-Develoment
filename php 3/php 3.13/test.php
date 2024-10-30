<?php

$fruits = array('a' => 'apple', 'b' => 'banana', 'd' => 'orange', 'f' => 'plum', 'm' => 'dates', 'p' => 'mango');
$numbers = array(11, 2, 56, 3, 4, 2, 77, 5);

/*
sort($fruits);
sort($numbers);

print_r($fruits);
print_r($numbers);
*/


/*
asort($fruits);
print_r($fruits);

asort($numbers);
print_r($numbers);

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
foreach ($numbers as $number) {
    echo $number . "\n";
}
*/


/*
arsort($fruits);
print_r($fruits);

arsort($numbers);
print_r($numbers);

foreach($numbers as $number){
    echo $number."\n";
}
*/


/*
ksort($fruits);
print_r($fruits);

ksort($numbers);
print_r($numbers);

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
foreach ($numbers as $number) {
    echo $number . "\n";
}
*/

/*
krsort($fruits);
print_r($fruits);

krsort($numbers);
print_r($numbers);

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
foreach ($numbers as $number) {
    echo $number . "\n";
}
*/


/*
sort($numbers, SORT_STRING);
print_r($numbers);
*/

$random = array("apple", "Apple", "banana", "Banana", "Pineapple");
sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random);
