<main class="flex flex-col h-screen w-screen justify-center items-center">
  <h1 class="text-4xl">500</h1>
  <h2 class="text-2xl">Internal Server Error</h2>
</main>

<div class="p-4 flex flex-col gap-4 absolute bottom-0 left-0">

  <div class="flex items-center gap-2 justify-start">
    <?php echo Icon::Bug->value ?>
    <strong>Error: </strong>
    <p><?php echo $_POST[0]; ?></p>
  </div>

  <div class="flex items-center gap-2 justify-start">
    <?php echo Icon::Stack->value ?>
    <strong>Stack Trace: </strong>
    <p>
      <?php
      $stack = preg_split("/#\d* /", $_POST[2]);
      array_shift($stack);
      foreach ($stack as $key => $value) {
        if (str_starts_with($value, CropPath)) {
          echo "#" . $key . " " . substr($value, strlen(CropPath)) . "<br/>";
        } else {
          echo "#" . $key . " " . $value . "<br/>";
        }
      }
      ?>
    </p>
  </div>

  <div class="flex items-center gap-2 justify-start">
    <?php echo Icon::Line->value ?>
    <strong>Line: </strong>
    <p><?php echo $_POST[1]; ?></p>
  </div>

</div>

<div class="p-4 absolute bottom-0 right-0 flex flex-col gap-4">
  <a href=<?php echo BasePath."/"?> class="bg-white bg-no-repeat px-6 py-3 font-bold text-center text-black w-52 justify-center rounded-lg bg-primary-linear transition-all duration-300 ease-out bg-[length:200%] bg-[200%] hover:bg-[100%] clickable hover:text-white">
    Return Home
  </a>
</div>
