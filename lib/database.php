<?php 

class Database {
  private $conn;

  function __construct() {
    $this->conn = mysqli_connect(Hostname, Username, Password);
    $this->conn->select_db(DatabaseName);
  }

  function __destruct() {
    $this->conn->close();
  }

  public function createAccount(string $user, string $pass) {
    $user = $this->conn->real_escape_string(trim($user));
    $pass = $this->conn->real_escape_string(trim($pass));

    // echo $pass."<br>";

    $pass_hashed = password_hash($pass, PASSWORD_DEFAULT);

    $query = $this->conn->prepare("INSERT INTO accounts VALUES(null, ?, ?, CURRENT_DATE(), 'Disabled')");
    $query->bind_param('ss', $user, $pass_hashed);
    $query->execute();

    if ($query->affected_rows == 1) {
      echo "OK";
    } else {
      echo "Error";
    }
  }

  public function loginAccount(string $user, string $pass) {
    $query = $this->conn->prepare("SELECT login, password FROM accounts WHERE login = ?");
    $query->bind_param("s", $user);
    $query->execute();
    $query->bind_result($userLogin, $userPass);
    $query->fetch();

    if ($query->num_rows() == 1) {
      if (password_verify($pass, $userPass)) {
        echo "Login i hasło zgodne";
      } else {
        session_start();
        $_SESSION["userLogin"] = $userLogin;
      }
    } else {
      echo "Niepoprawne dane";
    }
  }
}
