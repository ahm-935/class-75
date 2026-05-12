<?php

class Person{
    private $name;
    private $age;

    // public function __get($_pname){
    //     return $this->name = $_pname;
    // }

    // public function __set($_pname, $_pvalue){
    //     $this->name = $_pvalue;
    // }
    public function getAge(){
        return $this->age;
    }
    public function setAge($_age){
        $this->age = $_age;
    }
}
$person = new Person();
// $persom->name = "AHMED";
// $persom->age = 20;

// echo $persom->name;
echo "<br>";
$person->setAge(30);
echo $person->getAge();


?>