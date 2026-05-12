<?php
// session_start();
// if(isset($_SESSION['user_id'])){
//     echo "User id found";
// }else{
//     echo "User id not found";
// }

session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>
</head>
<body>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="report.php">Report</a>
        <a href="logout.php">Logout</a>
        <br><br>
        <!-- <button><a href="login.php"></a>Log Out</button> -->
    </nav>
    <h1>Report Page</h1>
</body>
</html>