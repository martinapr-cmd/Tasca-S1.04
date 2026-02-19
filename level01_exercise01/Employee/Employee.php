<?php

class Employee {

private string $name; 
private int $wage; 


public function __construct($name, $wage) {
    $this->name = $name;
    $this->wage = $wage;
}

public function getDetails(): string {
    if ($this->wage > 6000) {
        return "Employee's name is " . $this->name
         . " and their wage is " . $this->wage . " so they need to pay taxes.\n";
    } else {
        return "Employee's name is " . $this->name
         . " and their wage is " . $this->wage . " so they don't need to pay taxes.\n";
    } 
}

}

?>