<nav class="p-4">
  <div class="container mx-auto flex justify-between items-center">
    <a href="<?php echo BasePath . '/' ?>" class="text-white text-lg font-bold">Courier Service</a>
    <ul class="flex space-x-4">
      <li><a href="<?php echo BasePath . '/' ?>" class="text-white hover:underline">Home</a></li>
      <?php
      session_start();

      if (isset($_SESSION["id"])) {
        echo '<li><a href="' . BasePath . '/dashboard"" class="text-white hover:underline">Dashboard</a></li>';
        echo '<li><a href="' . BasePath . '/logout" class="text-white hover:underline">Log out</a></li>';
      } else {
        echo '<li><a href="' . BasePath . '/login" class="text-white hover:underline">Sign In</a></li>';
        echo '<li><a href="' . BasePath . '/register" class="text-white hover:underline">Sign Up</a></li>';
      }
      ?>
    </ul>
  </div>
</nav>
