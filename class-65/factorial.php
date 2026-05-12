<?php

// $number = readline("Enter a number: ");

if(isset($_POST["submit_btn"])){
    $factorial = $_POST["num"];

$factorial = 1;
$number = $_POST["num"];
if ($number < 0) {
    echo "Factorial does not exist for negative numbers";
} elseif ($number == 0) {
    echo "Factorial of 0 is 1";
}


for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
}
?>

<form action="" method="POST">
     <input type="number" name="num" value="5"><br>    
     <input type="submit" name="submit_btn">
     <hr>
     <?php echo $factorial; ?>
</form>