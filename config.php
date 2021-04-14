<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$database = "flexy";
// Create connection
$conection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conection->connect_error) {
("Failed: " . $conection->connect_error);
}

?>
