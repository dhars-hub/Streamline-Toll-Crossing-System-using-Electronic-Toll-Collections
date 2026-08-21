<?php

$host = "sql112.infinityfree.com";
$username = "if0_42710828";
$password = "YOUR_MYSQL_PASSWORD";
$database = "if0_42710828_tollplazz";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
