<?php
$str = "Hello   World     !";
echo substr($str, 6, 5);
echo "<br>";
echo strlen($str);
echo "<br>";
echo strrev($str);
echo "<br>";
var_dump(stripos($str, "h"));  // case sensitive , insencitive
echo "<br>";
echo "<br>";
echo str_replace("Hello World!", "Hi dear!", $str);
echo "<br>";
echo "<br>";
echo str_repeat($str, 3);
echo "<br>";
echo strtolower($str);
echo strtoupper($str); 
echo "<br>";
echo ucfirst($str);
echo "<br>";
echo lcfirst($str);
echo "<br>";
echo htmlentities("<h1 style='text-align:center; font-size:500px'> $str </h1>");
echo "<br>";
echo ("<h1 style='text-align:center; font-size:500px'> $str . 🤞 </h1>");
echo "<br>";
echo trim("$str ");
echo "<br>";

?>