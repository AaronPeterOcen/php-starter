<?php

abstract class Shapes {
    protected $name;

    // abstract method
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    // concrete method
    public function getName() {
        return $this->name;
    }
}

class Circle extends Shapes {
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shapes {
    private $width;
    private $height;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle('Circle', 4);
$rect = new Rectangle('Rectangle', 15,3);
// var_dump($circle);

echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';
echo $rect->getName() . ' Area: ' . $rect->calculateArea() . '<br>';
