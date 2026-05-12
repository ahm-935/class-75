<?php
$str = "Hello World 2026";
$arr = explode(" ", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";

$newStr = implode(" : ", $arr);
echo $newStr;

$arr2 = range('a', 'z', 3);
echo "<pre>";
print_r($arr2);
echo "</pre>";


$arr3 = range(0, 100, 5);
echo "<pre>";
print_r($arr3);
echo "</pre>";

$arr_assoc = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry",
    "d" => "durian",
];

echo array_key_exists("c", $arr_assoc) ? "Yes, Found" : "Not Found";

$keys = array_keys($arr_assoc);
echo "<pre>";
print_r($keys);
echo "</pre>";

$values = array_values($arr_assoc);
echo "<pre>";
print_r($values);
echo "</pre>";

?>