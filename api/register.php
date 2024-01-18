<?php
$router = new Router();
$db = new Database();

$db->createAccount($_POST["login"], $_POST["password"]);
$router->redirect("/dashboard");
