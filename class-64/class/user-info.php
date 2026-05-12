<?php
class User{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function checkAge(){
        if($this->age >= 18){
            return "<h3>You are eligible to vote.</h3>";
        }else{
            return "<h3>You are not eligible to vote.</h3>";
        }
    }
    function info(){
        return "Name: " . $this->name . "<br>" . "Age: " . $this->age ;
    }
}




?>