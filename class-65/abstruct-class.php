<?php
abstract class Test{
    public $name = "AHMED";
    public function getName(){
        return $this->name;
    }
    abstract public function getAge();
    abstract public function viewDetails();
}

class Person extends Test{
    public $age = 20;
    public function getAge(){
        echo $this->age;
    }
    public function viewDetails(){
        echo "Name: " . $this->name . "<br>" . "Age: " . $this->age . "<br>";
    }
}

$person = new Person();
echo $person->getName();
echo "<br>";
$person->getAge();
echo "<br>";
$person->viewDetails();

?>