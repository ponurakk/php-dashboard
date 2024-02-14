<div class="flex-[1] max-w-xs">
  <h1 class="text-4xl mb-4">Add Vehicle</h1>
  <form class="w-3/4 flex flex-col gap-6">

    <div>
      <label for="vehicle_brand" class="block font-large text-lg font-medium leading-6 text-neutral-400">Vehicle Brand</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Account->value ?></div>
        <input id="vehicle_brand" name="vehicle_brand" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="vehicle_model" class="block font-large text-lg font-medium leading-6 text-neutral-400">Vehicle Model</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::IdBadge->value ?></div>
        <input id="vehicle_model" name="vehicle_model" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="vehicle_registration" class="block font-large text-lg font-medium leading-6 text-neutral-400">Vehicle Registration</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Number->value ?></div>
        <input id="vehicle_registration" name="vehicle_registration" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="vehicle_capacity" class="block font-large text-lg font-medium leading-6 text-neutral-400">Vehicle Capacity (kg)</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Package->value ?></div>
        <input id="vehicle_capacity" name="vehicle_capacity" type="number" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
      </div>
    </div>

    <div>
      <label for="vehicle_department" class="block font-large text-lg font-medium leading-6 text-neutral-400">Vehicle Department</label>
      <div class="mt-2 relative">
        <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Home->value ?></div>
        <select id="vehicle_department" name="vehicle_department" class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
          <option value="" selected disabled>Select Department</option>
          <?php
          $db = new Database();
          $departments = $db->getDepartments();
          foreach ($departments as $key => $value) {
            echo '<option value="'.$value["id"].'">'.$value["name"].'</option>';
          }
          ?>
        </select>
      </div>
    </div>

    <input type="button" id="addVehicle" class="bg-white bg-no-repeat px-6 py-3 font-bold text-black w-1/2 justify-center rounded-lg bg-primary-linear transition-all duration-300 ease-out bg-[length:200%] text-xl bg-[200%] hover:bg-[100%] clickable hover:text-white" value="Submit">
  </form>
</div>
