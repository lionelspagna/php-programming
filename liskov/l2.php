<?php

abstract class Shape
{
    abstract public function area();
}

class Rectangle extends Shape
{
    public function __construct(
        private int|float $width,
        private int|float $height
    )
    {}

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle
{
    public function __construct(
        private int|float $side
    )
    {
        parent::__construct($this->side, $this->side);
    }
}

function printArea(Rectangle $rectangle)
{
    echo "Area: ".$rectangle->area()."\n";
}

echo "Running example \n";

$rectangle = new Rectangle(10,20);
printArea($rectangle);
//liskov substitution
$square = new Square(10);
printArea($square);


