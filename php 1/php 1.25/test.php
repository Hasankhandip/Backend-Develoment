<?php

$n = 6;
$result = 1;

for ($i = $n; $i > 1; $i--) {
    $result = $result * $i;
}
echo "Factorial of {$n} is {$result} \n";

echo "\n";

// ei way te onek beshi operation run kore 
$j = 1;
for ($n = 1; $n <= 10; $n++) {
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result = $result * $i;
        $j++;
    }
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of operation \n";



echo "\n";

$result = 1;
$j = 1;
for ($n = 1; $n <= 10; $n++) {
    $result *= $n; // $result = $result * $n
    $j++;
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of operation \n";
