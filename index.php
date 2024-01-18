<?php 
ob_start();
require_once "./lib/router.php";
require_once "config.php";
require_once "./lib/utils.php";
require_once "./lib/database.php";
include_once "./lib/icons.php";

function exception_error_handler($errno, $errstr, $errfile, $errline ) {
  throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}

set_error_handler("exception_error_handler");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo BasePath ?>/static/index.css" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

      * {
        font-family: "Roboto";
      }

      *, body, a {
        cursor: url("<?php echo BasePath ?>/static/mouseBlob.png") 16 16, auto !important;
      }

      button, input, .clickable {
        cursor: url("<?php echo BasePath ?>/static/mouseBlobBlack.png") 16 16, auto !important;
      }

      ::selection {
        color: #ea580c;
        background: #18181b;
      }
    </style>
  </head>
  <body class="bg-black max-h-screen text-white relative">
  <?php
    (new Render(ComponentType::NavBar))->render();
  ?>
    <div class="cursors">
      <div class="absolute w-8 h-8 bg-mouse-blob bg-[length:32px_32px] bg-no-repeat bg-center z-[100] pointer-events-none -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute w-8 h-8 bg-mouse-blob bg-[length:32px_32px] bg-no-repeat bg-center z-[100] pointer-events-none -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute w-8 h-8 bg-mouse-blob bg-[length:32px_32px] bg-no-repeat bg-center z-[100] pointer-events-none -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute w-8 h-8 bg-mouse-blob bg-[length:32px_32px] bg-no-repeat bg-center z-[100] pointer-events-none -translate-x-1/2 -translate-y-1/2"></div>
      <div class="absolute w-8 h-8 bg-mouse-blob bg-[length:32px_32px] bg-no-repeat bg-center z-[100] pointer-events-none -translate-x-1/2 -translate-y-1/2"></div>
    </div>

    <?php 
    $router = new Router();

    try {
      //# Views
      $router->get(BasePath, "views/index.view.php");
      $router->get(BasePath."/login", "views/login/login.view.php");
      $router->get(BasePath."/register", "views/login/register.view.php");

      $router->get(BasePath."/dashboard", "views/dashboard/dashboard.view.php", true);
      $router->get(BasePath."/dashboard/couriers", "views/dashboard/dashboard.view.php", true);
      $router->get(BasePath."/dashboard/departments", "views/dashboard/dashboard.view.php", true);
      $router->get(BasePath."/dashboard/status", "views/dashboard/dashboard.view.php", true);
      $router->get(BasePath."/dashboard/vehicles", "views/dashboard/dashboard.view.php", true);

      //# Api
      $router->post(BasePath."/login", "api/login.php");
      $router->post(BasePath."/register", "api/register.php");

      $router->get(BasePath."/api/couriers", "api/get_courier.php");
      $router->post(BasePath."/api/couriers", "api/add_courier.php");
      $router->delete(BasePath."/api/couriers", "api/remove_courier.php");

      $router->get(BasePath."/api/departments", "api/get_department.php");
      $router->post(BasePath."/api/departments", "api/add_department.php");
      $router->delete(BasePath."/api/departments", "api/remove_department.php");

      $router->get(BasePath."/api/vehicles", "api/get_vehicle.php");
      $router->post(BasePath."/api/vehicles", "api/add_vehicle.php");
      $router->delete(BasePath."/api/vehicles", "api/remove_vehicle.php");

      //# Errors
      $router->any(BasePath."/500", "views/errors/500.error.php");
      $router->any("/404", "views/errors/404.error.php");
    } catch (Exception $e) {
      $router->errorRedirect("/500", $e);
      // echo $e->getMessage();
    }
    ?>
  </body>
</html>
