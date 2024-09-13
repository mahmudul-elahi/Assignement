<?php

class Shape
{
    public function area()
    {
        return 0;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function area()
    {
        return $this->length * $this->width;
    }
}

$circle = new Circle(5);
echo "Circle area: " . $circle->area();

echo "<br/>";

$rectangle = new Rectangle(4, 3);
echo "Rectangle area: " . $rectangle->area();
