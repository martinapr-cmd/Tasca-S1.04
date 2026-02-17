<?php

require_once "Rectangle.php";
require_once "Triangle.php";

$rectangle = new Rectangle (50, 30);
echo "Rectangle's area: " . $rectangle->getArea() . "cm²\n";

$triangle = new Triangle (20, 60);
echo "Triangle's area: " . $triangle->getArea() . "cm²\n";


?>