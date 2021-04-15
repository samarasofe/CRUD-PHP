<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include('./config.php');

$id = $_GET['id'];

$newURL = "http://localhost/test_flexy/index.php";

$sql = "DELETE FROM product WHERE id=".$id; 

if ($conection->query($sql) === TRUE){    
  header('Location: '.$newURL);
} else {
  echo "Error : " . $conection->error;
} 