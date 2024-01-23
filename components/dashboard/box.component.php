<div class="bg-black/60 p-6 rounded-lg flex flex-row space-x-4 items-center justify-center">
  <div class="flex justify-center items-center">
    <div class="w-10 h-10">
      <?php echo str_replace('width="24" height="24"', 'width="32" height="32"', $args[2]); ?>
    </div>
    <div>
      <p class="text-blue-300 text-sm font-medium uppercase leading-4"><?php echo $args[0] ?></p>
      <p class="text-white font-bold text-2xl inline-flex items-center space-x-2">
        <span>+<?php echo $args[1] ?></span>
        <span>
          <?php
          if ($args[1] > 0) {
            echo Icon::TrendingUp->value;
          } else {
            echo Icon::TrendingDown->value;
          }
          ?>
        </span>
      </p>
    </div>
  </div>
</div>
