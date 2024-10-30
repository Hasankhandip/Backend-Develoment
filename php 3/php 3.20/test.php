<?php

$numbers = range(40, 72);
print_r($numbers);
echo count($numbers) . "\n";


//random number generate
$random = mt_rand(0, 32);
echo $numbers[$random] . "\n";


//random toss generate
$numbers1 = range(0, 1);
$random1 = mt_rand(0, 1);
$luck = $numbers1[$random1];
if ($luck % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}
echo PHP_EOL;

//shuffle
shuffle($numbers);
print_r($numbers);
$randomNumber = $numbers[32];
echo $randomNumber;


// Toss Practise with suffle
echo PHP_EOL;
$tossNumber = range(1, 2);
shuffle($tossNumber);
$tossLuck = $tossNumber[0];
if ($tossLuck % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}
