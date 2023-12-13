<?php
require_once "./lib/router.php";
$top_dir = $_SERVER['REQUEST_URI'];
$top_dir = rtrim($top_dir, "/");

$router = new Router();

//# Views
$router->get("$top_dir/", "views/index.view.php");
$router->get("$top_dir/login", "views/index.view.php");
$router->get("$top_dir/register", "views/register.view.php");
$router->get("$top_dir/dashboard", "views/dashboard.view.php");

//# Api
$router->post("$top_dir/login", "api/login.php");
$router->post("$top_dir/router", "api/register.php");

//# Errors
$router->any("/404", "views/errors/404.error.php");
