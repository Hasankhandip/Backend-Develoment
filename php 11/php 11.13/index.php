<?php

class mathCalculator
{
    private $number;
    static $name;
    static function fibonacci($n)
    {
        echo self::$name . "\n";
        self::doSomething();
        echo "Fibonacci series up to {$n}\n";
    }
    static function doSomething()
    {
        echo "Do Something\n";
    }
    function factorial($n)
    {
        self::$name = "Self Name";
        self::doSomething();
        $this->doSomething();
        $this->number = 12;
        echo "Calculating factorial of {$n}\n";
    }
}

$mathC = new mathCalculator();
$mathC->factorial(1);
// $mathC->fibonacci(8);
mathCalculator::fibonacci(7);
echo mathCalculator::$name;
