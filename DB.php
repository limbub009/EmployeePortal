<?php

class DB {
  private $con;
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $name = "portal";

  public function __construct() {
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;

    try {
      $this -> con = new PDO($dsn, $this->user, $this->password);
      $this->con->setAttribute(PDO::ATTR_ERRMODE
      PDO::ERRMODE_EXCEPTION);
      echo "Connection Successful";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  public function viewData() {
    $query = "SELECT name FROM names";
    $stmt = $this->con->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }

}


?>
