<?php

class Student {
    public $id;
    public $name;
    public $batch;

    public function __construct($id, $name, $batch) {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }

    public function result($id){
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Batch: " . $this->batch . "<br>";
    }
}

$student = new Student(10, "Tanveer", "WDPF-70");
// $student->result(123);

if (isset($_POST['Submit'])) {
    $search = $_POST['search'];
    if ($search == 10) {
        $student->result(123);
    }
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