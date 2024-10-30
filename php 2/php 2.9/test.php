<?php

/*
$name = "Earth"; // global scope

function dosomething(){
    // global $name;
    // echo $name;
    
    echo $GLOBALS ['name'];
}

dosomething();
*/

/*
function dosomething(){
    global $name;
    $name = "Earth"; // local scope
}

dosomething();
echo $name;
*/


/*
function doSomething(){
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doSomething();
doSomething();
*/


function doSomething()
{
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

function doExtra()
{
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();
