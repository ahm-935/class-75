<?php

class User{
    public $name;
    public $age;

    // public function __construct(string $name, int $age){
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        echo "Construct called" . "<br>";
    }
    function __toString(){
        echo "toString called" . "<br>";
        return "Name: " . $this->name . "Age: " . $this->age . "<br>";
    }
    public function __destruct()
    {
        echo "Destruct called" . "<br>";
        return "Bye";
    }
    function test(){
        echo "HELLO" . "<br>";        
    }
    
    }

    
$user = new User("Shahriar", 24);
echo $user->name . "<br>";
unset($user);          
// echo $user->age . "<br>";


?>