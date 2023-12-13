<?php
include "./lib/utils.php";
include "./config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./static/index.css" rel="stylesheet">
  </head>
  <body>
    <?php 
    require_once "./lib/router.php";
    include_once "config.php";

    $router = new Router();

    //# Views
    $router->get("$basePath", "views/index.view.php");
    $router->get("$basePath/login", "views/login.view.php");
    $router->get("$basePath/register", "views/register.view.php");
    $router->get("$basePath/dashboard", "views/dashboard.view.php");

    //# Api
    $router->post("$basePath/login", "api/login.php");
    $router->post("$basePath/router", "api/register.php");

    //# Errors
    $router->any("/404", "views/errors/404.error.php");

    ?>
  </body>
</html>
