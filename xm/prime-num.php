<?php
$msg = "";
if (isset($_POST['Submit'])) {
    $num = $_POST['num'];
    $count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }
    if ($count == 2) {
        $msg = $num . " is a prime number";
    } else {
        $msg = $num . " is not a prime number";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="num" value="5">
        <input type="submit" name="Submit" value="Submit">
    </form>
    <p>
    <h3>
        <?php echo $msg; ?>
    </h3>
    </p>
</body>

</html>