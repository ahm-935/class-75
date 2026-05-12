<?php
// echo "<span>PHP Section</span>", "-", "PHP", "<br>";
// echo ("New line");
// echo "<br>" . "New line 2" . "<br>";
// print("Hello World");
// print "Hello World";

// $arr = ["PHP", "JS", "HTML", "CSS", "SQL", 5889];
// const PI = 3.1416;
// echo $arr[0], "<br>";
// echo "---------------------", "<br>";

// print_r($arr);
// echo "<br>";
// echo "---------------------", "<br>";

// var_dump($arr);
$name = "Nadir";

printf("He is %s and his age is %d", "Nadir", 30);
echo "<br>";
echo "---------------------", "<br>";
print("He is " . $name . " and his age is " . 23);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>HTML Section</h2>
    <h3>
        <?php
         echo  "PHP inside HTML";
        ?>
    </h3>
<h1><?= "new PHP Inside HTML" ?></h1>
</body>

</html>

<?= "PHP Bottom" ?>

<!-- Not Recommended -->
<? echo "PHP bottom 2" ?>