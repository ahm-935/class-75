<?php
// new mysqli(host, username, password, database)

// // local 
// define("DB_HOST", "localhost");
// define("DB_USER", "root");
// define("DB_PASS", "");
// define("DB_NAME", "home_tasks");

// // webhost/ hosting
// define("DB_HOST", "abc.com");
// define("DB_USER", "my_username");
// define("DB_PASS", "**************");
// define("DB_NAME", "home_tasks");
// $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$db = new mysqli("localhost", "root", "", "wdpf_70");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
// }else {
//     echo "Connected successfully";
}

?>