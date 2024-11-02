<?php

class A
{
    public static $name;
    static function sayHi()
    {
        self::$name = "Hello\n";
        echo "Hi from A\n";
    }
}
class B extends A
{
    static function sayHi()
    {
        parent::sayHi();
        echo parent::$name;
        echo "Hi form B\n";
    }
}


B::sayHi();
echo B::$name;
