<?php

// echo "Hello 10";

$name = "Dip";
$age = 18;
$country = "Bangladesh";
$question = "How are you?";
$ans = "I'm Fine";

/*
// varriable lekhar niyom
$my_name = '';
$MyName = '';
$myName = '';
*/


/*
$age = '18';

$word = 'age';

echo $word; // er output word = age

echo $$word; // er output word = $age = 18
*/

echo 'Hello ' . $country;
echo "\n";
echo "Hello $country";
echo "\n";
echo 'Age = ' . $name . " " . $age;
echo "\n";
echo "Hey {$name} {$age}, {$question}\n";
echo "Hey {$name}, {$ans}";
