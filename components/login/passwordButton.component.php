<div>
  <div class="flex items-center justify-between">
    <label for="password" class="block text-lg font-medium leading-6 text-neutral-400"><?php echo $args[0] ?></label>
  </div>
  <div class="mt-2 relative">
    <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Lock->value ?></div>
    <input id="password" name="password" type="password" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
  </div>
</div>
