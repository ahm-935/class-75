<?php

$students = [
    "Tuhin" => 87,
    "Karim" => 54,
    "Rahim" => 46,
    "Niaj"  => 95,
    "Safat" => 75
];


$maxScore = 0;
$topStudent = "";

foreach ($students as $name => $score) {
    if ($score > $maxScore) {
        $maxScore = $score;
        $topStudent = $name;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px 0; font-family: sans-serif; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f4f4f4; }
        .highlight { background-color: #d4edda; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Student Result Sheet</h2>

    
    <table border="1">
        <thead>
            <tr>
                <th>SL No.</th>
                <th>Student Name</th>
                <th>Score</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $name => $score): ?>
                <tr class="<?php echo ($name == $topStudent) ? 'highlight' : ''; ?>">
                    <td><?php echo array_search($name, array_keys($students)) + 1; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $score; ?></td>
                    <td>
                        <?php
                            if ($score >= 80) {
                                echo "A";
                            } elseif ($score >= 70) {
                                echo "B";
                            } elseif ($score >= 60) {
                                echo "C";
                            } elseif( $score >= 50) {
                                echo "D";
                            } else {
                                echo "F";
                            }
                        ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
    <!-- <p>
        <strong>Maximum Score:</strong> <?php# echo $maxScore; ?> <br>
        <strong>Student Name:</strong> <?php# echo $topStudent; ?>
    </p> -->

</body>
</html>