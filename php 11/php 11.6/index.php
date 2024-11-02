<?php

class Animal
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function eat()
    {
        echo "{$this->name} is eating";
    }
    public function run()
    {
        echo "{$this->name} is running";
    }
    public function sleep()
    {
        echo "{$this->name} is sleeping";
    }
    public function greet() {}

    protected function addTitle($title)
    {
        $this->name = $title . "" . $this->name;
    }
}

class Human extends Animal
{
    public function greet()
    {
        $this->addTitle("Mr.");
        echo "{$this->name} says Hi";
    }
}

class Cat extends Animal
{
    public function greet()
    {
        echo "{$this->name} says Meow";
    }
}


$rasel = new Human('Rasel');
echo $rasel->greet();
echo PHP_EOL;
echo $rasel->eat();
echo PHP_EOL;
$cat1 = new Cat('Tom');
echo $cat1->greet();
