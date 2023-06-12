<?php

$n="12";


// array writing type 1
$students= array(
    "rahim",
    "karim",
    123,
    "monir"
);

/*
// array writing type 2
$students = [
    "rahim",
    "karim",
    123,
    "monir"
];
*/

// var_dump($students);
// echo count($students);

/*
for($i=0;$i<count($students);$i++){
    echo $students[$i]."\n";
}
*/



$n = count($students);

//starting loop
for($i = 0; $i < $n; $i++){
    echo $students[$i]."\n";
}
echo PHP_EOL;
//back loop
for($i = $n - 1; $i >=0; $i--){
    echo $students[$i]."\n";
}