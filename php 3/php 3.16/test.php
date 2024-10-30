<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);


function square($n)
{
    printf("Square of %d is %d \n", $n, $n * $n);
}
array_walk($numbers, 'square');



function cube($n)
{
    return $n * $n * $n;
}
$new_array = array_map('cube', $numbers);
print_r($numbers);
print_r($new_array);



function even($n)
{
    return $n % 2 == 0;
}
$even_number = array_filter($numbers, 'even');
print_r($even_number);



function odd($n)
{
    return $n % 2 == 1;
}
$odd_number = array_filter($numbers, 'odd');
print_r($odd_number);



$persons = array('sujon', 'kabir', 'sabab', 'selim', 'roni', 'jamal', 'kamal', 'sayma');
function filterByS($name)
{
    return $name[0] == 's';
}
$new_persons = array_filter($persons, 'filterByS');
print_r($new_persons);

// // // // // // //

$persons = array('sujon', 'kabir', 'sabab', 'selim', 'roni', 'jamal', 'kamal', 'sayma');
function filter_by_s($persons)
{
    return $persons[0] == 's';
}
$new_persons = array_filter($persons, 'filter_by_s');
print_r($new_persons);
