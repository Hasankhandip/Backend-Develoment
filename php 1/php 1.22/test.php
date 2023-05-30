<?php

/*
for ($i = 1; $i<10; $i+=1){
    echo $i;
    echo PHP_EOL;
}
*/

/*
for ($i = 1; $i<20; $i+=2){
    echo $i;
    echo PHP_EOL;
}
*/


for ($i = 1; $i<10; $i++){
    echo $i;
    echo PHP_EOL;
    for($j=0; $j<$i; $j++){
        echo"*";
    }
}


/*
$a=0;
while($a<10){
    $a++;
    echo $a.PHP_EOL;
}
*/


/*
$b=0;
do{
    $b++;
    echo $b.PHP_EOL;
}while($b<10);
*/

/*
$c=0;
a: $c++;
echo $c.PHP_EOL;
if($c<10) goto a;
*/