<?php

/*
$numbers1 = array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,21,44,3,28,1,2,7);

$fruits1 = array("a"=>"apple","b"=>"banana","c"=>"lemon");
$fruits2 = array("d"=>"pineapple","b"=>"malta","d"=>"grapes","e"=>"lemon");


$common = array_intersect($numbers1,$numbers2);
$commonf = array_intersect($fruits1,$fruits2);

print_r($common);
print_r($commonf);
*/


$numbers1 = array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,21,44,3,28,1,2,7);

$fruits1 = array("a"=>"apple","b"=>"banana","c"=>"lemon");
$fruits2 = array("d"=>"pineapple","b"=>"malta","g"=>"grapes","c"=>"lemon");

$commonf = array_intersect_assoc($fruits1,$fruits2);
print_r($commonf);

$fruits_diff = array_diff($fruits1,$fruits2);
print_r($fruits_diff);

$fruits_diff = array_diff_assoc($fruits1,$fruits2);
print_r($fruits_diff);

$fruits_diff_1 = array_diff($fruits2,$fruits1);
print_r($fruits_diff_1);

$fruits_diff_1 = array_diff_assoc($fruits2,$fruits1);
print_r($fruits_diff_1);

$diff = array_diff($numbers1, $numbers2);
print_r($diff);

$diff1 = array_diff($numbers2, $numbers1);
print_r($diff1);