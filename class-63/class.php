<?php
class PersonInfo{
    public $name = "Jahin";
    public $age = 25;

    public function info(){
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

$person = new PersonInfo();
// $person->info();
echo  $person->name . "<br>";
$person->name = "Shahriar";
echo "Name:" . $person->name . "<br>";
echo "Age:" . $person->age . "<br>";



/*
$arr = [1,2,3];
echo "<pre>";
print_r($person);
print_r($arr);
echo "</pre>";
*/

?>