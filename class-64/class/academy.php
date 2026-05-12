<?php
require_once "trainee.php";

class Academy extends Trainee{
    public $session;
    public function __construct($session,$course, $year, $name, $age){
        parent::__construct($course, $year, $name, $age);
        $this->session = $session;
    }
}

$academy = new Academy(2026,"PHP", 2025, "Shahriar", 24);
$academy->info();
echo "Session:" . $academy->session . "<br>";
$academy->test();


?>