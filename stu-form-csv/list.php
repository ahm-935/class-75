<?php
include "files/stu-oop.php";
$s = new Student();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <nav>
        <a href="add-stu.php">Add Student</a>
        <a href="list.php">Student List</a>
        <a href="search.php">Search Student</a>
    </nav>
    <h1>Student List</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Batch</th>
        </tr>
        <?php echo $s->showAll(); ?>
    </table>
</body>
</html>