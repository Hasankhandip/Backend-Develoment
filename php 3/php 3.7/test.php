<?php

$person = array(
    'fname'=>'Hello',
    'lname'=>'world'
);


$newperson = $person; // just copy person data
$newperson['lname'] = 'pluto';

print_r($person);
print_r($newperson);
echo PHP_EOL;


/*
$newperson = &$person; // acces full person
$newperson['lname'] = 'pluto2';

print_r($person);
print_r($newperson);
*/

/*
function printData($person){
    $person['fname'] .= " changed";
    print_r($person);
}

printData($person);
print_r($person);
*/


function printData(&$person){
    $person['fname'] .= " changed";
    print_r($person);
}

printData($person);
print_r($person);
