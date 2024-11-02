<?php

class A
{
    static function sayHi()
    {
        echo "Hi from A\n";
    }
}
class B extends A
{
    static function sayHi()
    {
        echo "Hi form B\n";
        parent::sayHi();
    }
}


B::sayHi();
