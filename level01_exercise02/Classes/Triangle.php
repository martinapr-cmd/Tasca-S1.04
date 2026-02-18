<?php

require_once "Shape.php";

Class Triangle extends Shape {

public function getArea(): float {
return ($this->width * $this->length)/2; 
    }

}

?>