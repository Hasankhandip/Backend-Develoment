<?php

$person = [
    'fname'=>'Hello', 
    'lname'=>'world'
];

print_r($person);

unset($person['lname']); // unset() eta je kono data remove korar jonno use kora hoy
print_r($person);