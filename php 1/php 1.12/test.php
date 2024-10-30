<?php

/*   <------------- logical operator ------------>
    ==
    !=
*/



$n = 13;

if ($n % 2 == 0) {
    echo "$n is an even number \n";
} else {
    echo "$n is an odd number \n";
}

if ($n > 10) {
    echo "$n is greater than 10 \n";
}

$a = 12;
$b = 13;
if ($a == $b) {
    echo "a is equal to b \n";
} else if ($a != $b) {
    echo "a is not equal to b \n";
}



$alam = 100;
$rahim = 90;


if ($alam >= $rahim) {
    echo "Alam has same or more money than Rahim \n";
} elseif ($alam == $rahim) {
    echo "Alam & Rahim has same amount of money \n";
} elseif ($alam > $rahim) {
    echo "Alam has more money than Rahim \n";
} elseif ($alam < $rahim) {
    echo "Alam has less money than Rahim \n";
}



$age = 14;

if ($age >= 13 && $age <= 19) {
    echo "This person is a teenager \n";
} else {
    echo "This person is not a teenager \n";
}


$food = "tuna";

if ("tuna" == $food || "salmon" == $food) {
    echo "{$food} has Vitamin D \n";
} elseif ("apple" == $food) {
    echo "Apple doesn't contain vitamin D";
} else {
    echo "We don't know if {$food} contains vitamin D \n";
}
