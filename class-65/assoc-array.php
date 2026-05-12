<?php
$arr = [
    "Malaysia" => "Kuala Lumpur",
    "Iran" => "Tehran",
    "Bangladesh" => "Dhaka",
    "Japan" => "Tokyo",
    "Korea" => "Seoul"
    ];

    echo "Main Array: <br>";
    echo "------------------<br>";

    foreach ($arr as $key => $val) {
        echo "$key => $val <br>";
    }

    echo "<br>------------------<br>";
    echo "Sorted Array: <br>";
    echo "------------------<br>";
    ksort($arr);
    foreach ($arr as $key => $val) {
        echo "$key => $val <br>";
    }
?>