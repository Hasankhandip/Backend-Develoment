<?php

$string = "Quick brown Fox fox jumps over the lazy dog";
$string2 = "Quick brown fox fox jumps over the lazy dog";
$string3 = "Quick brown fox jumps over the lazy dog fox";


// strpos
// $offset = strpos($string, "Fox");
// if ($offset !== false) {
//     echo "\nWord was found\n";
// } else {
//     echo "\nWord was not found \n";
// }

// echo $offset;

//stripos
// $offset = stripos($string, "Fox");
// if ($offset !== false) {
//     echo "\nWord was found\n";
// } else {
//     echo "\nWord was not found \n";
// }

// echo $offset;


//strrpos
$offset = strrpos($string2, "fox");
if ($offset !== false) {
    echo "\nWord was found\n";
} else {
    echo "\nWord was not found \n";
}
echo $offset;


//strripos
$offset = strripos($string3, "fox");
if ($offset !== false) {
    echo "\nWord was found\n";
} else {
    echo "\nWord was not found \n";
}

echo $offset;
