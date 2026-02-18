<?php

require_once "Employee/Employee.php"; 

$Emp1 = new Employee("Mark", 8000);
echo $Emp1->getDetails(); 

$Emp2 = new Employee("Sara", 6200);
echo $Emp2->getDetails();

$Emp3 = new Employee("Kane", 2500);
echo $Emp3->getDetails();

?>