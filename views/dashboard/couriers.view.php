<template id="courierRowTemplate">
  <tr class="border-b border-orange-700 hover:bg-black/30">
    <td class="py-3 px-2">{{name}}</td>
    <td class="py-3 px-2">{{lastname}}</td>
    <td class="py-3 px-2">{{phone_number}}</td>
    <td class="py-3 px-2">{{hours_from}} - {{hours_to}}</td>
    <td class="py-3 px-2">{{department_id}}</td>
    <td class="py-3 px-2"></td>
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
          <!-- <?php (new Render(ComponentType::CourierRow))->render_dash(); ?> -->
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="<?php echo BasePath ?>/scripts/courier.js"></script>
