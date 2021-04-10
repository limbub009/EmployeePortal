<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "portal";

$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if($con->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";


?>
