<?php
$arr = [
    "Tuhin" => 87,
    "Rahim" => 90,
    "Karim" => 70,
    "Safat" => 70,
    "Niaj"  => 95
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result sheet</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5" height="100" width="350px">
        <tr>
            <th>Student Name</th>
            <th>Result</th>
        </tr>
        <?php
        foreach ($arr as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <p><b>Maximum score: <?php echo max($arr); ?></b></p>
    <p><b>Student Name:  <?php echo array_search(max($arr), $arr); ?></b></p>
</body>
</html>

<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Student Name</th>
        <th>Result</th>
    </tr>
    <?php
    foreach ($arr as $key => $value) {
        echo "<tr>
                  <td>$key</td>
                  <td>$value</td>
             </tr>";
    }
    ?>
</table>
  <h3>Minimum score: <?php $min_score = min($arr); echo $min_score; ?></h3>
  <h3>Student Name:  <?php echo array_search($min_score, $arr); ?></h3>

  <hr>
  
  <table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Student Name</th>
        <th>Result</th>
    </tr>
        <?php foreach ($arr as $key => $value) { ?>
        <tr>
           <td><?= $key ?></td>
           <td><?= $value ?></td>
        </tr>
        <?php } ?>
    
</table>

<hr>

<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Student Name</th>
        <th>Result</th>
    </tr>
        <?php foreach ($arr as $key => $value) : ?>
        <tr>
           <td><?= $key ?></td>
           <td><?= $value ?></td>
        </tr>
        <?php endforeach ?>
    
</table>


<br><br><br><br>
