<?php
    include "files/stu-oop.php";
    $studentSystem = new StudentResult("results.txt");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchQuery = $_POST["id"];
        $studentSystem->findResult($searchQuery);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
</head>
<body>
    <nav>
        <a href="add-stu.php">Add Student</a>
        <a href="list.php">Student List</a>
        <a href="search.php">Search Student</a>
    </nav>
    <h1>Search Student</h1>
    <form action="search.php" method="post">
        <label for="searchQuery">Search by ID or Name:</label>
        <input type="text"  name="id" required>
        <input type="submit" value="Search">
</form>
    <div>
        <?php
        if (isset($searchQuery)) {
            echo "<h2>Search Results for: " . htmlspecialchars($searchQuery) . "</h2>";
            $studentSystem->findResult($searchQuery);
        }
        ?>
    </div>
</body>
</html>
    