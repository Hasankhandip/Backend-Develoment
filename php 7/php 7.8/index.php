<?php

$filename = "/Users/User/OneDrive/Desktop/Backend Development/php 7/php 7.8/data/f1.txt";

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


// $encodedData = json_encode($students);
// file_put_contents($filename, $encodedData, LOCK_EX);

//object
// $data = file_get_contents($filename);
// $allStudents = json_decode($data);
// print_r($allStudents);
// echo $allStudents[0]->fname;


//array
$data = file_get_contents($filename);
$allStudents = json_decode($data, true);
print_r($allStudents);
echo $allStudents[0]['fname'];
