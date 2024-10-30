<?php

/*
<------------ array manupulation ---------->$_COOKIE

array_shift(); // prothom diker data remove kore

array_unshift(); // prothom dike data entry kore

array_pop();    // last er diker data remove kore

array_push(); // prothom dike data entry kore 

*/

$students = [
    "rahim",
    "karim",
    123,
    "monir"
];

$students[2] = "shafik";

$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}

echo PHP_EOL;

$student = array_pop($students);
$student = array_shift($students);

$students[] = "jamal";
array_push($students, "Kamal");
array_unshift($students, "salam");
array_unshift($students, "salman");


$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}
