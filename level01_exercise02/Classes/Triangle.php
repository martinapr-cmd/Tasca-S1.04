<?php

require_once "Shape.php";

class Triangle extends Shape
{

    public function getArea(): float
    {
        return ($this->width * $this->length) / 2;
    }
}
?>