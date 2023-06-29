<?php

$fruits = array('a'=>'apple','b'=>'banana','d'=>'orange','f'=>'plum','m'=>'dates','p'=>'mango');
$numbers = array(1,11,2,'56',3,4,22,77,5);

// if(in_array(56,$numbers,true)){
//     echo '56 is found'."\n";
// }else{
//     echo 'not found';
// }


if(in_array(56,$numbers)){
    echo '56 is found ';
}else{
    echo 'not found';
}
$offset = array_search(56,$numbers);
echo $offset;


echo PHP_EOL;
if(key_exists('b',$fruits)){
    echo "Key b exists ";
}else{
    echo 'not found';
}