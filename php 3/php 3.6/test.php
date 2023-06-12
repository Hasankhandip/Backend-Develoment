<?php

$student = array(
    'fname'=>'Jamal',
    'lname'=>'Ahmed',
    'age'=>'15',
    'class'=>8,
    'section'=>'B'
);

print_r($student);

echo $student['fname']." ".$student['lname']."\n";
printf("%s %s \n",$student['fname'],$student['lname']);


// echo serialize($student);

$serialized =  serialize($student);
$newstudent = unserialize($serialized);

print_r($newstudent);

$jsondata = json_encode($student);
echo $jsondata;

echo PHP_EOL;

$student2 = json_decode($jsondata,true);
print_r($student2);