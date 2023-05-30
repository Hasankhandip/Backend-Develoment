<?php

/*
echo PHP_EOL; mean echo"\n";
*/

$n = 12;


if($n%2==0){
    echo"Even Number";
}else{
    echo"Odd Number";
}

echo PHP_EOL;

if($n%2==0):
    echo"Even Number";
    echo PHP_EOL;
    echo"Some Text";
// elseif (true):
else:
    echo"Odd Number";
    echo PHP_EOL;
    echo"Some Text++";
endif;

echo PHP_EOL;

switch($n%2):
    case 0:
        echo"$n is even number";
        break;
    default:
        echo"$n is odd number";
endswitch;




/*
<?php
if($n%2==0):
?>
Even Number
Some Text
<?php
else:
?>
Odd Number
Some Text++
<?php
endif;
*/