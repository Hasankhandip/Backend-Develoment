<?php

class districtCollection implements IteratorAggregate
{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district)
    {
        array_push($this->districts, $district);
    }
    // function getDistrict()
    // {
    //     return $this->districts;
    // }
    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
}

$districts = new districtCollection;
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Chittagong");


// $_districts = $districts->getDistrict();
foreach ($districts as $district) {
    echo $district . "\n";
}
