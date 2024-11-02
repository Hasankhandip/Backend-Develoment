<?php

class districtCollection implements IteratorAggregate, Countable
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
    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
    function count(): int
    {
        return count($this->districts);
    }
}

$districts = new districtCollection;
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Chittagong");
$districts->add("Pabna");


foreach ($districts as $district) {
    echo $district . "\n";
}
echo "Number of districts is " . count($districts);
