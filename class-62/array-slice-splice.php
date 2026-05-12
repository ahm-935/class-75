<?php
$arr = [1,2,3,4,5,6,7,8,9,10];

echo "<pre>";
print_r(array_slice($arr, 3,-3));
echo "</pre>";

array_splice($arr, 3,5, ["Hello", "World"]);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>