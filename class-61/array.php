<?php
$arr = [1, 2, true, "Hello", [1,2,3,['a', 'b', 'c']]];
$arr2 = array(1, 2, 3, 4, 5,['a', 'b', 'c']);

echo "<pre>";
print_r($arr);
print_r($arr2);
echo "</pre>";

echo count($arr);
echo "<br>";
echo count($arr2);

echo "<br>";
echo $arr[4][3][0];
?>