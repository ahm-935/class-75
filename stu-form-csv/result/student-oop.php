<?php
class Student{
    public $id;
    public $name;
    public $batch;
    function __construct($_id=null, $_name="", $_batch=""){
        $this->id = $_id;
        $this->name = $_name;
        $this->batch = $_batch;
    }    
    function showAll(){
        $file = fopen(__DIR__ . "/student.csv", "r");
        $html = "";
        while($row = fgetcsv($file)){
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            $html .= "<tr>";
            $html .= "<td>$row[0]</td>";
            $html .= "<td>$row[1]</td>";
            $html .= "<td>$row[2]</td>";
            $html .= "</tr>";
        }
        fclose($file);
        return $html;
    }
    function save(){
        $file = fopen(__DIR__ . "/student.csv", "a+");
        fputcsv($file, [$this->id, $this->name, $this->batch]);
        fclose($file);
        return "Data saved successfully!";
    }
    function result($_id){
        $file = fopen(__DIR__ . "/student.csv", "r");        
        while($row = fgetcsv($file)){
            if($row[0] == $_id){
                return "ID: $row[0],<br>Name: $row[1],<br>Batch: $row[2]";
            }
        }
        fclose($file);
        return "Data not found!";
    }
}

// $s = new Student();
// echo $s->showAll();
?>

<?php
    // require_once "files/stu-oop.php";

    if (isset($_POST["id"])) {
        // echo $_POST["id"];
        $stu = new Student();
        $result = $stu->result($_POST["id"]);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
</head>
<body>
    <nav>
        <a href="add-stu.php">Add Student</a>
        <a href="list.php">Student List</a>
        <a href="search.php">Search Student</a>
    </nav>
    <h1>Search Result by ID</h1>
    <form action="search.php" method="post">
        <label for="searchQuery">Search by ID or Name:</label>
        <input type="text"  name="id" required>
        <input type="submit" value="Search">
</form>
<br><hr>
    <div>
       <?= $result ?? "" ?>
    </div>
</body>
</html>