<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'login';

mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("connection Failed: " . mysqli_connect_error());
}
?>

