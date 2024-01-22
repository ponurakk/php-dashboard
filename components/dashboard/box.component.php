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
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
          </svg>
        </span>
      </p>
    </div>
  </div>
</div>
