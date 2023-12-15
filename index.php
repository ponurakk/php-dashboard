<?php 
require_once "./lib/router.php";
require_once "config.php";
require_once "./lib/utils.php";
require_once "./lib/database.php";
include_once "./lib/icons.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./static/index.css" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

      *{
        font-family: "Roboto";
      }

    </style>
  </head>
  <body class="bg-black">
    <?php 
    $router = new Router();

    //# Views
    $router->get(BasePath, "views/index.view.php");
    $router->get(BasePath."/login", "views/login/login.view.php");
    $router->get(BasePath."/register", "views/login/register.view.php");
    $router->get(BasePath."/dashboard", "views/dashboard.view.php");

    //# Api
    $router->post(BasePath."/login", "api/login.php");
    $router->post(BasePath."/router", "api/register.php");

    //# Errors
    $router->any("/404", "views/errors/404.error.php");
    ?>
  </body>
</html>
