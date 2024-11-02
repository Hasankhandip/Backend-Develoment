<?php

abstract class ourClass
{
    final function doSomething()
    {
        echo "Doing Something";
    }
}

class myClass extends ourClass {}

$mc = new myClass();
$mc->doSomething();
