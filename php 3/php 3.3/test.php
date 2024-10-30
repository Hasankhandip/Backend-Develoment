<?php

/*
$students = [
    '12'=>'Hasan',
    '13'=>'Karim',
    '20'=>'Jalal',
];

echo $students[12];
*/

$foods = [
    'vegetables' => 'biriyani, brocolli, carrot, capsicam',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'wtaer, milk'
];

// $foods['drinks'] = $foods['drinks'].", orange juice";
$foods['drinks'] .= ", orange, juice";


// echo $foods['vegetables'] . PHP_EOL;

/* (Evabe run korbe nah foreach diye korte hobe )
for ($i = 0; $i < count($foods); $i++) {
    echo $foods[$i];
}
*/
/*
foreach ($foods as $key => $value) {
    echo $key . "=" . $value . "\n";
}
*/

/*
$keys = array_keys($foods); 
print_r($keys);

$keys = array_values($foods);
print_r($keys);
*/

// $keys = array_keys($foods);
// for($i=0;$i<count($keys);$i++){
//     $key=$keys[$i];
//     echo $foods[$key]."\n"; 
// }

$values = array_values($foods);
for ($i = 0; $i < count($values); $i++) {
    $value = $values[$i];
    echo $value . "\n";
}
