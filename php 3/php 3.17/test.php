<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);
function sum($oldValue, $newValue){
    return $oldValue+$newValue;
}
$sum = array_reduce($numbers, 'sum');
echo $sum;
echo "\n";


//even number

$numbers = array(1,2,3,4,5,6,7,8,9,10);
function sum1($oldValue, $newValue){
    if($newValue%2==0){
        return $oldValue+$newValue;
    }
    return $oldValue;
}
$sum1 = array_reduce($numbers, 'sum1');
echo $sum1;
echo "\n";


//odd number

$numbers = array(1,2,3,4,5,6,7,8,9,10);
function sum2($oldValue, $newValue){
    if($newValue%2==1){
        return $oldValue+$newValue;
    }
    return $oldValue;
}
$sum2 = array_reduce($numbers, 'sum2');
echo $sum2;
echo "\n";

//count
echo count($numbers);