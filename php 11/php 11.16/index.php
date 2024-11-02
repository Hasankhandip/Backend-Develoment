<?php
define('OK', 123);

class myClass
{
    const CITY = "Dhaka";

    function sayHi()
    {
        echo "Hi from " . $this::CITY . "\n";
    }
}

$m = new myClass();
$m->sayHi();
echo myClass::CITY;
