<?php
session_start();
$_SESSION['id'] = "001";
$_SESSION['name'] = "Shakib";
$_SESSION['age'] = "22";
// unset($_SESSION['age']);
// session_unset();

session_destroy();
?>
