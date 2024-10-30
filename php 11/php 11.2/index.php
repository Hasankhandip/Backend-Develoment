<?php

class Human
{
    public $name;
    function sayHi()
    {
        echo "Salam\n";
        $this->sayName();
    }
    function sayName()
    {
        echo "My name is {$this->name}";
    }
}


class Cat
{
    function sayHi()
    {
        echo "Meow\n";
    }
}


class Dog
{
    function sayHi()
    {
        echo "Woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Rubel\n"; //set operation
$h2->name = "Hasin\n"; //set operation
$c1 = new Cat();
$d1 = new Dog();


$h1->sayHi();
$h2->sayHi();
// echo $h1->name;     //get operation
// echo $h2->name;     //get operation
// $c1->sayHi();
// $d1->sayHi();
