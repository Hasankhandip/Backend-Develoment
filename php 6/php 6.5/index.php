<?php
$string = "Hello World,World How are you";
$string2 = "Quick brown fox jumps over the lazy dog";

$parts = explode(" ", $string);
print_r($parts);
echo PHP_EOL;

$original = join(" ", $parts);
echo $original;
echo PHP_EOL;

$original = implode(" ", $parts);
echo $original;
echo PHP_EOL;


$part2 = str_split($string);
print_r($part2);
echo PHP_EOL;


$part3 = strtok($string, " ,");
while ($part3 !== false) {
    echo $part3 . PHP_EOL; //iterator
    $part3 = strtok(" ,");
}
echo PHP_EOL;


$part4 = strtok($string2, " ,");
while ($part4 !== false) {
    echo $part4 . PHP_EOL;
    $part4 = strtok(" ,");
}
echo PHP_EOL;


$part5 = preg_split("/ |,/", $string);
print_r($part5);
