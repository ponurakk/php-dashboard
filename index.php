<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./static/index.css" rel="stylesheet">
  </head>
  <body class="bg-black">
    <?php 
    require_once "./lib/router.php";
    include_once "config.php";
    include "./lib/utils.php";
    
    $router = new Router();

    //# Views
    $router->get(BasePath, "views/index.view.php");
    $router->get(BasePath."/login", "views/login/login.view.php");
    $router->get(BasePath."/register", "views/register.view.php");
    $router->get(BasePath."/dashboard", "views/dashboard.view.php");

    //# Api
    $router->post(BasePath."/login", "api/login.php");
    $router->post(BasePath."/router", "api/register.php");

    //# Errors
    $router->any("/404", "views/errors/404.error.php");

    ?>
  </body>
</html>
