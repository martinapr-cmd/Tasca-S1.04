<?php

require_once "Shape.php";

Class Rectangle extends Shape {

public function getArea(): float {
return $this->width * $this->length;
    }
}

?>