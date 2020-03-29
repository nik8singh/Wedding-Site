<?php
$servername = "localhost";
$port = "3306";
$username = "nikhil";
$password = "Welcome1";
$dbname = "wedding_guest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    header('HTTP/1.1 500 Internal Server Booboo ' . $conn->connect_error);
    header('Content-Type: application/json; charset=UTF-8');
    die("Connection failed: " . $conn->connect_error);
}