<?php

/* string theke array korar jonno explode*/
/* array theke string korar jonno join*/

// $vegetables = explode(', ','brinjal, brocolli, carrot, capsicam');

$vegetables = preg_split('/(, |,)/', 'brinjal, brocolli, carrot, capsicam,potato, sweet-potato');
print_r($vegetables);

/*
var_dump($vegetables);
echo $vegetables[0];
*/

/*
$vegetables_string = join(', ',$vegetables);
echo $vegetables_string;
*/

echo count($vegetables);
