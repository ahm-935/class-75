<?php
$arr = ["a", "b", "c"];
$str = "Hello";

echo is_array($arr) ? "Yes, it is array" : "No";

echo "<br>";
echo is_array($str) ? "Yes" : "No, it is not array";
echo "<br>";

echo in_array("a", $arr) ? "Yes, founded" : "No";
echo "<br>";
echo in_array("d", $arr) ? "Yes" : "No, not founded";



?>