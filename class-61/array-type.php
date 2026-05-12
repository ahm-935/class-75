<?php
/*
        1. Numeric/Indexed Array
        2. Associative Array
        3. Multidimensional Array
    */

$arr_num = ["a", "b", true, 123, false];

echo "<pre>";
var_dump($arr_num);
echo "</pre>";

$arr_assoc = [
    "name" => "Sally",
    "age"  => 20,
    "email"=> [
               "e1" =>"sally@gmail.com",
               "e2" => "durian@gmail.com"
    ],
];
$arr_assoc["name"] = "Arif";
echo "<pre>";
var_dump($arr_assoc);
echo "</pre>";
echo $arr_assoc["email"]["e1"];

$arr_multi = [
    ["a", "b", "c"],
    ["d", "e", "f"],
    ["g", "h", "i"]
];

echo "<pre>";
var_dump($arr_multi);
echo "</pre>";


echo "<br>";
?>