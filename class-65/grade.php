<?php

$msg = "";
// $grade = readline("Enter your grade (A, B, C, D, F): ");

if(isset($_POST["submit_btn"])){
    $grade = $_POST["grade"];

if ($grade == "A") {
    $msg = "Result:" . " Excellent";
} elseif ($grade == "B") {
    $msg = "Result:" . " Good";
} elseif ($grade == "C") {
    $msg = "Result:" . " Fair";
} elseif ($grade == "D") {
    $msg = "Result:" . " Poor";
} elseif ($grade == "F") {
    $msg = "Result:" . " Failure";
} else {
    $msg = "Result:" . " Invalid grade entered!";
}
}
?>


<body>
    <form action="" method="POST">
        <input type="text" name="grade"><br>
        <input type="submit" name="submit_btn"><br>
        <hr>
        <span>
            <?=  "<h2> $msg" ?>
        </span>
    </form>