<?php
class User{
    public $name;
    public $age;
    protected $address = "Dhaka";
    private $password = "1234";
    static $country = "Bangladesh";
    public function __construct($_name, $_age){
        $this->name = $_name;
        $this->age = $_age;
    }
     static function checkPass($_password){
        if($_password == "1234"){
            return true;
        }
        else {
            return false;
        }
        }
        final  function action(){
            echo "<h2>Info from parent class</h2>";
        }
    public function test(){
        echo "Test from parent class" . "<br>";
        echo"Password: " . $this->password;
    }
}
class Trainee extends User{
    public $course;
    public $year;
    public function __construct($_course, $_year, $_name, $_age){
        parent::__construct($_name, $_age);
        $this->course = $_course;
        $this->year = $_year;
    }
    // public function action(){
        // cannot override final function
    // }

    public function info(){
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Course: " . $this->course . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Address: " . $this->address . "<br>";
    }
}
$user = new User("Shahriar", 15);
//echo $user->address;               // only public variable can be accessed outside the class
echo $user->name . "<br>";
$user->test();

echo "<br>";

echo "<hr>";
echo User::checkPass("12364");
echo "Country: " . User::$country;
echo "<hr>";
$trainee = new Trainee("PHP", 2025, "Shahriar", 24);
$trainee->info();
//echo $trainee->address . "<br>";  // protected variable cannot be accessed outside the class

?>