<?php
class Shape {}

class Shapes
{
    private $shapes;
    function __construct()
    {
        $this->shapes = array();
    }
    function addShapes(Shape $shape)
    {
        array_push($this->shapes, $shape);
    }
    function totalShapes()
    {
        return count($this->shapes);
    }
}


class Rectangle1 extends Shape {}
class Triangle1 extends Shape {}
class Student {}


$shapesCollection = new Shapes();
$shapesCollection->addShapes(new Rectangle1());
$shapesCollection->addShapes(new Triangle1());
// $shapesCollection->addShapes(new Student());

echo $shapesCollection->totalShapes();
