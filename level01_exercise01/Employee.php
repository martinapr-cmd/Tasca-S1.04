<?php

class Employee {

public $name; 
public $wage; 


public function __construct(string $name, int $wage) {
    $this->name = $name;
    $this->wage = $wage;
}

public function get_details() {
    if ($this->wage >= 6000) {
        echo "Employee's name is " . $this->name
         . " and their wage is " . $this->wage . " so they need to pay taxes.\n";
    } else {
        echo "Employee's name is " . $this->name
         . " and their wage is " . $this->wage . " so they don't need to pay taxes.\n";
    }
}

}





?>