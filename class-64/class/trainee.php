<?php
require_once "../child-class.php";
class Trainee extends User{
    public $course;
    public $year;
    public function __construct($course, $year,$name, $age){
        parent::__construct($name, $age);
        $this->course = $course;
        $this->year = $year;
    }
    public function info(){
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Course: " . $this->course . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

$trainee = new Trainee("PHP", 2025, "Shahriar", 24);
$trainee->info();
$trainee->test();
echo "<hr>";


?>