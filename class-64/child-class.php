<?php

class User{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function test(){
        echo "Test from parent class";
    }
}





echo "<hr>";






?>