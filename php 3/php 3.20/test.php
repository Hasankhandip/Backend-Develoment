<?php

$numbers = range(40,72);
print_r($numbers);
echo count($numbers)."\n";


//random number generate
$random = mt_rand(0,32);
echo $numbers[$random]."\n";


//random toss generate
$luck = $numbers[$random];
if($luck % 2 == 0){
    echo "Head";
}else{
    echo "Tail";
}
echo PHP_EOL;

//shuffle
shuffle($numbers);
print_r($numbers);
$randomNumber = $numbers[32];
echo $randomNumber;