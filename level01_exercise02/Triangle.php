<?php

require_once "Shape.php";

Class Triangle extends Shape {

function __construct(float $width, float $length) {
parent::__construct($width, $length);
}

public function getArea() {
return ($this->width * $this->length)/2; 
}

}

?>