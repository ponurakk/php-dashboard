<?php
$router = new Router();
$db = new Database();

$db->loginAccount($_POST["login"], $_POST["password"]);
if ($db->checkValidLogin()) {
  $router->redirect("/dashboard");
}
