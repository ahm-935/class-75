<?php

//localhost
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'courier';


//Hosting
// const DB_HOST = 'localhost';
// const DB_USER = 'root';
// const DB_PASSWORD = '';
// const DB_NAME = 'php_project';

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>