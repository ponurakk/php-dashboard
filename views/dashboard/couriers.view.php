<template id="courierRowTemplate">
  <tr class="border-b border-orange-700 hover:bg-black/30">
    <td class="py-3 px-2">{{name}}</td>
    <td class="py-3 px-2">{{lastname}}</td>
    <td class="py-3 px-2">{{phone_number}}</td>
    <td class="py-3 px-2">{{hours_from}} - {{hours_to}}</td>
    <td class="py-3 px-2">{{department_name}}</td>
    <td class="py-3 px-2">
      <input type="button" class="courier-remove bg-white bg-no-repeat px-6 py-3 font-bold text-black w-full justify-center rounded-lg bg-primary-linear transition-all duration-300 ease-out bg-[length:200%] text-xl bg-[200%] hover:bg-[100%] clickable hover:text-white" data-id="{{id}}" value="Delete">
    </td>
  </tr>
</template>

<div class="flex justify-between w-full">
  <?php (new Render(ComponentType::AddCourier))->render_dash(); ?>
  <div id="couriers" class="flex-[1]">
    <h1 class="font-bold py-4 uppercase">Registered Couriers</h1>
    <div>
      <table class="w-full whitespace-nowrap">
        <thead class="bg-black/60">
          <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
          <th class="text-left py-3 px-2">Last Name</th>
          <th class="text-left py-3 px-2">Phone Number</th>
          <th class="text-left py-3 px-2">Work Hours</th> <!-- hours_from - hours_to  -->
          <th class="text-left py-3 px-2">Department</th>
          <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
        </thead>
        <tbody id="courierTable">
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="<?php echo BasePath ?>/scripts/courier.js"></script>
