<?php
$arr = ["Mina", "Raju", "Xariff", "Mithu","Asad", "Sajid"];

echo "<pre>";
print_r($arr);
echo "</pre>";

sort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

rsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr_assoc = [
    "Japan" => "Tokyo",
    "Bangladesh" => "Dhaka",
    "England"    => "London",
    "Pakistan"   => "Islamabad",
    "Turkey"     => "Ankara",
    "Iran"   => "Tehran",
    "Nepal"      => "Kathmandu",
    "Bhutan"     => "Thimphu"
];
echo "<pre>";
print_r ($arr_assoc);
echo "</pre>";

asort($arr_assoc);
echo "<pre>";
print_r($arr_assoc);
echo "</pre>";

arsort($arr_assoc);
echo "<pre>";
print_r($arr_assoc);
echo "</pre>";


ksort($arr_assoc);
echo "<pre>";
print_r($arr_assoc);
echo "</pre>";

krsort($arr_assoc);
echo "<pre>";
print_r($arr_assoc);
echo "</pre>";




?>