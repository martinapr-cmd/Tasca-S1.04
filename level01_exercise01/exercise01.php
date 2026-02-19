<?php

require_once "Employee/Employee.php"; 

$Emp1 = new Employee();
$Emp1->setEmployee("Mark", 8000);
echo $Emp1->getDetails(); 

$Emp2 = new Employee();
$Emp2->setEmployee("Sara", 6200);
echo $Emp2->getDetails();

$Emp3 = new Employee();
$Emp3->setEmployee("Kane", 2500);
echo $Emp3->getDetails();

?>