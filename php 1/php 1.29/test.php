<?php

$veryold = 0;
$old = 1;
$new = 1;

for ($i = 0; $i < 10; $i++) {
    echo $veryold . PHP_EOL;
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}

/*

initilal value
v = 0
o = 1
n = 1

1st loop
v = 1
o = 1
n = 1 

2nd loop 
v = 1
o = 1
n = 2

3rd loop
v = 2
o = 2
n = 3

4th loop 
v = 3
o = 3
n = 5

*/