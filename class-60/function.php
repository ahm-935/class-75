<?php

function test($text, $text2="") {
    echo "Hello, " . $text . " " . $text2 . "<br>";
}

test("Hi", "There");

//fucntion expression
$test2 = function($text) {
    echo "Hello, " . $text . "<br>";
};



?> 