<?php

$filename = "/Users/User/OneDrive/Desktop/Backend Development/php 7/php 7.7/data/f1.txt";

$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 11,
        'class' => 7,
        'roll' => 12
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 11
    )
);
$students1 = array(
    'fname' => 'Hasan',
    'lname' => 'Khan',
    'age' => 20,
    'class' => 13,
    'roll' => 17
);

/*
$data = serialize($students);
file_put_contents($filename, $data, LOCK_EX);
*/

/*
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);
unset($allStudents[1]);
$data = serialize($allStudents);
file_put_contents($filename, $data, LOCK_EX);
*/


$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);
// array_push($allStudents, $students1);

// $data = serialize($allStudents);
// file_put_contents($filename, $data, LOCK_EX);
