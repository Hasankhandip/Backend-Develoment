<?php

function factorial(int $n)
{
    // if(gettype($n)!="integer"){
    // return "invalid";
    // }
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}
