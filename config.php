<?php
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
echo "Connected successfully";
?>
