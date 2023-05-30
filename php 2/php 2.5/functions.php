<?php

// function sum(int ...$numbers):int {
//     $result=0;
//     for($i=0;$i<count($numbers);$i++){
//         $result += $numbers[$i];
//     }
//     return $result;
// }



/* evabe x,y declare korle return er shomoy x,y bad diye count hobe karon functon e x,y define kora hoy nai */

function sum($x, $y, int ...$numbers):int {
    echo $x;
    echo "\n";
    echo $y;
    echo "\n";
    $result=0;
    for($i=0;$i<count($numbers);$i++){
        $result += $numbers[$i];
    }
    return $result;
}