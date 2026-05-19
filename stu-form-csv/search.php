<?php
    require_once "files/stu-oop.php";

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
    <!-- <nav>
        <a href="add-stu.php">Add Student</a>
        <a href="list.php">Student List</a>
        <a href="search.php">Search Student</a>
    </nav> -->
    <h1>Search Result</h1>
    <form action="search.php" method="post">
        <label for="searchQuery">Enter Student ID:</label>
        <input type="text"  name="id" required>
        <input type="submit" value="Search">
</form>
<br><hr>
    <div>
       <?= $result ?? "" ?>
    </div>
</body>
</html>
    