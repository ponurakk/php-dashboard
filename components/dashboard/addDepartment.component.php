<div class="flex-[1] max-w-xs">
  <h1 class="text-4xl mb-4">Add Department</h1>
  <form class="w-3/4 flex flex-col gap-6">

    <div>
      <label for="department_name" class="block font-large text-lg font-medium leading-6 text-neutral-400">Department Name</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Account->value ?></div>
        <input id="department_name" name="department_name" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="department_street" class="block font-large text-lg font-medium leading-6 text-neutral-400">Department Street</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Road->value ?></div>
        <input id="department_street" name="department_street" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="department_home_number" class="block font-large text-lg font-medium leading-6 text-neutral-400">Department Home Number</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Home->value ?></div>
        <input id="department_home_number" name="department_home_number" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="department_locale_number" class="block font-large text-lg font-medium leading-6 text-neutral-400">Department Locale Number</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Number->value ?></div>
        <input id="department_locale_number" name="department_locale_number" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="department_post_code" class="block font-large text-lg font-medium leading-6 text-neutral-400">Department Post Code</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::MailBox->value ?></div>
        <input id="department_post_code" name="department_post_code" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="department_city" class="block font-large text-lg font-medium leading-6 text-neutral-400">Department City</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::SkyScraper->value ?></div>
        <input id="department_city" name="department_city" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="department_phone_number" class="block font-large text-lg font-medium leading-6 text-neutral-400">Department Phone Number</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Phone->value ?></div>
        <input id="department_phone_number" name="department_phone_number" type="tel" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="department_email" class="block font-large text-lg font-medium leading-6 text-neutral-400">Department Email</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Mail->value ?></div>
        <input id="department_email" name="department_email" type="email" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <input type="submit" class="bg-white bg-no-repeat px-6 py-3 font-bold text-black w-1/2 justify-center rounded-lg bg-primary-linear transition-all duration-300 ease-out bg-[length:200%] text-xl bg-[200%] hover:bg-[100%] clickable hover:text-white" value="Submit">
  </form>
</div>
