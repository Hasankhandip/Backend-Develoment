<?php

$string = " Hello \n,";
$string = trim($string, ' ,');
echo $string;
echo "Data";
echo PHP_EOL;
echo PHP_EOL;


$string = " Hello \n,";
$string = ltrim($string, ' ,');
echo $string;
echo "Data";
echo PHP_EOL;
echo PHP_EOL;


$string = " Hello \n,";
$string = rtrim($string, ' ,');
echo $string;
echo "Data";
