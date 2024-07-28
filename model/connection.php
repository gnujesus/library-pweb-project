<?php

$address = "sql207.infinityfree.com:3306";
$username = "if0_36994926";
$password = "Xc9qdQe9o7tIU";
$database = "if0_36994926_db";

$conn = new mysqli($address, $username, $password, $database);
$conn->set_charset("utf8");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>