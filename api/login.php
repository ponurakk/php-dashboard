<?php 
$router = new Router();

$db->loginAccount($_POST["login"], $_POST["password"]);
$router->redirect("/login");
