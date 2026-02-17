<?php

require_once "Employee.php"; 

$Emp1 = new Employee("Mark", 8000);
$Emp1->get_details(); 

$Emp2 = new Employee("Sara", 6200);
$Emp2->get_details();

$Emp3 = new Employee("Kane", 2500);
$Emp3->get_details();

?>