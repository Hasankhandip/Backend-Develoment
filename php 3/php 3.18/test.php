<?php

/*
$color = array(122,233,65);

$red = $color[0];
$green = $color[1];
$blue = $color[2];

echo $blue;
*/


$color = array(122,233,65);
list($red ,$green ,$blue) = $color;
echo $blue;
echo "\n";


$student = array('firstName','lastName','Email','mobileNumber');
list($fname,$lname,$email,$mNumber) = $student;
echo $fname;
echo "\n";


list($fname,$lname,$email,$mNumber) =  array('firstName','lastName','Email','mobileNumber');
echo $lname;
echo "\n";