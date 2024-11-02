<?php

abstract class ourClass
{
    function sayHi()
    {
        echo "Hi";
    }
    abstract function eat($v1, $v2 = 0);
}

class myClass extends ourClass
{
    function eat($m1, $m2 = 0)
    {
        echo "I am eating";
    }
}

$mc = new myClass();
$mc->eat(1, 2);
