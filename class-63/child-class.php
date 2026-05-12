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
class Trainee extends User{
    public $email;
    public $course;
    public function __construct($name, $age, $email, $course){
        parent::__construct($name, $age);
        // $this->name = $name;
        // $this->age = $age;
        $this->email = $email;
        $this->course = $course;
    }
}

$trainee = new Trainee("Shahriar", 24, "a@b.com", "PHP");
echo "Name:" . $trainee->name . "<br>";
echo "Age:" . $trainee->age . "<br>";
echo "Email:" . $trainee->email . "<br>";
echo "Course:" . $trainee->course . "<br>";
$trainee->test();






?>