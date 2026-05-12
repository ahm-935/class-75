<?php
require_once("class/user-info.php");
$user = new User("Shahriar", 15);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voting Status</h1>
    <p> <?php 
    echo $user->info() . "<br>";
    echo $user->checkAge(); ?></p>
</body>
</html>
