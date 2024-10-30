<?php

/*
** Determines if the argument is even or odd
*/

include_once "functions.php";
$x = 12;
//argument
if (isEven($x)) {
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}
