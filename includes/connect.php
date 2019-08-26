<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($dbhost, $dbuser, $dbpass, $db);
?>