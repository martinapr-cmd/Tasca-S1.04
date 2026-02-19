<?php

require_once "Shape.php";

class Rectangle extends Shape
{

    public function getArea(): float
    {
        return $this->width * $this->length;
    }
}
?>