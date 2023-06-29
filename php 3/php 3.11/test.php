<?php

$fruits = array('apple','banana','orange','plum','dates','mango');
$random = array("a"=>12,"b"=>45,"c"=>34,"d"=>22,"e"=>77,"f"=>31, 12=>78,"g"=>87 );


// $randomData = array_slice($random,1,-1,true);

$newFruits = array("Jackfruit","tamarind","pineapple");
$somefruits = array_splice($fruits,-5,2,$newFruits);


print_r($somefruits);
print_r($fruits);