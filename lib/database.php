<?php 

class Database {
  private $conn;

  function __construct(string $hostname, string $username, string $password, string $database) {
    $this->conn = mysqli_connect($hostname, $username, $password, $database);
  }

  // function createAccount() {
  //   $this->conn->query("");
  // }
}
