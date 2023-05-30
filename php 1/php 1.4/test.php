<?php

/*
Integer Int
Double / Float
Boolean
Null
String
Array
Object
Resource
*/

echo "Hello";
echo "\n";


$name = "Dip";
var_dump($name);

$age = 18;
var_dump($age);

$age = 18.5;
var_dump($age);

$age = null;
var_dump($age);

$age = "";
var_dump($age);

$name1 ="Dip";
$name2 ="Khan";
var_dump($name1,$name2);

$result = true;
var_dump($result);

$country="Bangladesh";
echo "My country name is {$country}\n";

$fname="Hasan";
$mname="Masfique";
$lname="Khan";
printf("His %s name is %s %s %s","full", $fname, $mname, $lname);
echo "\n";
echo "His name is {$fname} {$lname}\n";


$planet1="Mercury";
$planet2="Jupiter";

echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet is %s \n",$planet1,$planet2);
printf("The smallest planet is %s and the biggest planet is %s \n",strtoupper($planet1),strtolower($planet2));