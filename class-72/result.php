<?php
class Student
{
    public $ID;
    public $name;
    public $score;
    public $grade;

    function __construct($ID, $name = "", $score = '', $grade = '')
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->score = $score;
        $this->grade = $grade;
    }
    public function result($ID)
    {
        // if ($this->score > 90) {
        //     $this->grade = "A+";
        // } elseif ($this->score > 80) {
        //     $this->grade = "A";
        // } elseif ($this->score > 70) {
        //     $this->grade = "B";
        // } elseif ($this->score > 60) {
        //     $this->grade = "C";
        // } elseif ($this->score > 50) {
        //     $this->grade = "D";
        // } else {
        //     $this->grade = "F";
        // }
        $arr = [
            ["id" => 1, "name" => "Tanveer", "score" => 85, "grade" => 'A'],
            ["id" => 2, "name" => "Ali", "score" => 93, "grade" => 'A+'],
            ["id" => 3, "name" => "Usman", "score" => 79, "grade" => 'B']
        ];
        $this->grade = $arr[$ID]['grade'];
        echo "ID: " . $this->ID . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Score: " . $this->score . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}
if (isset($_POST['Submit'])) {
    $ID = $_POST['search'];
    $student = new Student($ID);
    $student->result($ID);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <form action="" method="POST">
        <input type="search" name="search" id="">
        <input type="submit" value="Search Result" name="Submit">
    </form>
</body>

</html>