<?php

// ternery operator 


$n = 12;
if (12 == $n) {
    echo "Twelve";
} elseif (10 == $n) {
    echo "Ten";
} else {
    echo "A Number";
}

echo "\n";

// $numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = (12 == $n) ? "Twelve" : ((10 == $n) ? "Ten" : "A Number");
/*
 $numberInWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number"; 
 // eivabe nexted terney operator likhte hoy but video er same code likhew amar eta wrong ashtice

 // next video 1.21 e dekhaice code ta evabe hobe 
 $numberInWord = (12 == $n) ? "Twelve" : ((10 == $n) ? "Ten" : "A Number"); 
*/
echo $numberInWord;

echo "\n";

if ($n % 2 == 0) {
    echo "Even Number";
} else {
    echo "odd number";
}
echo "\n";

$result = ($n % 2 == 0) ? "{$n} Even Number" : "{$n} Odd Number";
echo $result;
