<?php

$text = "The United States is withdrawing 5,000 troops from NATO ally Germany, 
the Pentagon announced on Friday, as a rift over the Iran war widens between 
President Donald Trump and Europe.";


$replacements = [
    "US" => "BD",
    "Europe" => "Asia",
    "From" => "to",
    "United States" => "Bangladesh",
    "The" => ""
];


foreach ($replacements as $search => $replace) {
    $text = str_replace($search, $replace, $text);
}


echo $text;
?>
