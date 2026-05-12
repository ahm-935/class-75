<?php
$arr = [
    ["id" => 10, "name" => "Tanveer", "batch" => "WDPF-70"],
    ["id" => 20, "name" => "Ali", "batch" => "WDPF-70"],
    ["id" => 30, "name" => "Usman", "batch" => "WDPF-70"]
];
if (isset($_POST['Student_ID'])) {
    $Id = $_POST['Student_ID'];
    $student = new Student($Id);
    $msg = $student->result($Id);
}

class Student
{
    public $id;
    public $name;
    public $batch;

    public function __construct($id, $name="", $batch="")
    {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }
    public function result($id){
        global $arr;
        foreach ($arr as $item) {
            if ($item['id'] == $id) {
                $message = "ID: " . $item['id'] . "<br>";
                $message .= "Name: " . $item['name'] . "<br>";
                $message .= "Batch: " . $item['batch'] . "<br>";
                return $message;
            }
            
        }
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
        <input type="search" name="Student_ID" id="">
        <input type="submit" value="Search Result" name="Submit">
    </form>
    <p>
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
    </p>
</body>

</html>