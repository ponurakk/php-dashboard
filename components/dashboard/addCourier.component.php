<div class="flex-[1] max-w-xs">
  <h1 class="text-4xl mb-4">Add Courier</h1>
  <form class="w-3/4 flex flex-col gap-6">

    <div>
      <label for="courier_name" class="block font-large text-lg font-medium leading-6 text-neutral-400">Courier Name</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Account->value ?></div>
        <input id="courier_name" name="courier_name" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="courier_last_name" class="block font-large text-lg font-medium leading-6 text-neutral-400">Courier Last Name</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Account->value ?></div>
        <input id="courier_last_name" name="courier_last_name" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="courier_phone_number" class="block font-large text-lg font-medium leading-6 text-neutral-400">Courier Phone Number</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Phone->value ?></div>
        <input id="courier_phone_number" name="courier_phone_number" type="tel" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="courier_start_hour" class="block font-large text-lg font-medium leading-6 text-neutral-400">Courier Start Hour</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::ClockUp->value ?></div>
        <input id="courier_start_hour" name="courier_start_hour" type="time" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="courier_finish_hour" class="block font-large text-lg font-medium leading-6 text-neutral-400">Courier Finish Hour</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::ClockDown->value ?></div>
        <input id="courier_finish_hour" name="courier_finish_hour" type="time" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="courier_department" class="block font-large text-lg font-medium leading-6 text-neutral-400">Courier Department</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Plane->value ?></div>
        <select id="courier_department" name="courier_department" class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
          <option value="" selected disabled>Select Department</option>
          <option value="IT">IT Department</option>
          <option value="HR">HR Department</option>
          <option value="Operations">Operations Department</option>
          <option value="Marketing">Marketing Department</option>
        </select>
      </div>
    </div>

    <input type="button" id="addCurier" class="bg-white bg-no-repeat px-6 py-3 font-bold text-black w-1/2 justify-center rounded-lg bg-primary-linear transition-all duration-300 ease-out bg-[length:200%] text-xl bg-[200%] hover:bg-[100%] clickable hover:text-white" value="Submit">
  </form>
</div>
