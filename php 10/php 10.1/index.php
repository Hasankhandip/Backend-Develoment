<?php

//unix epoch
//unix timestamp
echo time();
echo PHP_EOL;

// Date details
echo date('d/m/y');
echo PHP_EOL;
echo date('d/m/Y');
echo PHP_EOL;
echo date('d/F/Y');


//microtime details
echo PHP_EOL;
echo microtime(true);
echo PHP_EOL;
var_dump(microtime(false));
echo PHP_EOL;
$mt = microtime(true);
printf("%10.8f", $mt);
echo PHP_EOL;
printf("%10.18f", $mt);
echo PHP_EOL;


// microtime (factorial)
$startTime = microtime(true);
factorial(1000);
sleep(2); /* sleep(2) er mane 2 second por count start kore*/
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f", $executionTime);

function factorial($n)
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
