<?php 
$router = new Router();
$db = new Database();

$db->loginAccount($_POST["login"], $_POST["password"]);
$router->redirect("/dashboard");
