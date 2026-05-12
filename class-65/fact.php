<?php

if(isset($_POST["submit_btn"])){
    $num = $_POST["num"];
    $factorial = 1;
    // $num = $_POST["num"];
    // if ($num < 0) {
    //     echo "Factorial does not exist for negative numbers";
    // } elseif ($num == 0) {
    //     echo "Factorial of 0 is 1";
    // }
    for ($i = 1; $i >=1 ;  $i--) {
        $factorial *= $i;
    }
}
$msg = "Factorial of $num is $factorial"; ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h2>Factorial</h2>
    <form action="" method="POST">
        <input type="number" name="num" value="5">    
        <input type="submit" name="submit_btn">
        <br>
        <p><?php echo $msg ?? "" ?></p>
    </form>
</body>
</html>
<br>
<br>
<hr>
<br>
<br>
