<?php
require_once "./lib/router.php";

$router = new Router();

//# Views
$router->get("/", "views/index.view.php");
$router->get("/login", "views/index.view.php");
$router->get("/register", "views/register.view.php");
$router->get("/dashboard", "views/dashboard.view.php");

//# Api
$router->post("/login", "api/login.php");
$router->post("/router", "api/register.php");

//# Errors
$router->any("/404", "views/errors/404.error.php");
