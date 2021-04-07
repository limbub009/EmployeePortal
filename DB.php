<?php

class DB {
  private $con;
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $name = "portal";

  public function __construct() {
    echo "HI";
  }

}


// $con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
//
// if($con->connect_error){
//   die("Connection failed: " . $conn->connect_error);
// }
//
// echo "Connected successfully";


?>
