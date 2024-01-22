<?php 

class Database {
  private $conn;

  function __construct() {
    $this->conn = mysqli_connect(Hostname, Username, Password);
    $this->conn->select_db(DatabaseName);
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
  }

  function __destruct() {
    $this->conn->close();
  }

  public function createAccount(string $user, string $pass) {
    $user = $this->conn->real_escape_string(trim($user));
    $pass = $this->conn->real_escape_string(trim($pass));

    $pass_hashed = password_hash($pass, PASSWORD_DEFAULT);

    $query = $this->conn->prepare("INSERT INTO account VALUES(null, ?, ?, CURRENT_DATE(), 'Disabled')");
    $query->bind_param('ss', $user, $pass_hashed);
    $query->execute();

    if ($query->affected_rows == 1) {
      $_SESSION["id"] = $this->conn->insert_id;
      $_SESSION["login"] = $user;
      $_SESSION["password"] = $pass_hashed;
      echo "OK";
    } else {
      echo "Error";
    }
  }

  public function loginAccount(string $user, string $pass) {
    $query = $this->conn->prepare("SELECT id, login, password FROM account WHERE login = ?");
    $query->bind_param("s", $user);
    $query->execute();
    $query->bind_result($id, $userLogin, $userPass);
    $query->fetch();

    if (!isset($id)) {
      // TODO: show notification instead of just returning
      return;
    }

    // if ($query->num_rows == 1) {
    if (password_verify($pass, $userPass)) {
      $_SESSION["id"] = $id;
      $_SESSION["login"] = $user;
      $_SESSION["password"] = $userPass;
    } else {
      echo "Invalid data";
    }
    // } else {
    //   echo "Invalid data";
    // }
  }

  public function checkValidLogin(): bool {
    if (!isset($_SESSION["id"])) {
      return false;
    }

    $query = $this->conn->prepare("SELECT login, password FROM account WHERE id = ?");
    $query->bind_param("s", $_SESSION["id"]);
    $query->execute();
    $query->bind_result($userLogin, $userPass);
    $query->fetch();

    if ($_SESSION["login"] == $userLogin && $_SESSION["password"] == $userPass) {
      return true;
    }

    return false;
  }

  public function logout() {
    unset($_SESSION["id"]);
    unset($_SESSION["login"]);
    unset($_SESSION["password"]);
    $router = new Router();
    $router->redirect("/");
  }

  public function getCourier(): array {
    $ret = array();
    $query = $this->conn->query("SELECT couriers.name, couriers.lastname, couriers.phone_number, couriers.hours_from, couriers.hours_to, departments.name AS department_name FROM couriers INNER JOIN departments ON couriers.department_id = departments.id");
    while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
      array_push($ret, $row);
    }
    return $ret;
  }
}
