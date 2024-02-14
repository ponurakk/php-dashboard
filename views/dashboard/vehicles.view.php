<template id="vehicleRowTemplate">
  <tr class="border-b border-orange-700 hover:bg-black/30">
    <td class="py-3 px-2">{{brand}}</td>
    <td class="py-3 px-2">{{model}}</td>
    <td class="py-3 px-2">{{registration}}</td>
    <td class="py-3 px-2">{{capacity}}</td>
    <td class="py-3 px-2">{{department}}</td>
      <td class="py-3 px-2">
      <input type="button" class="vehicle-remove bg-white bg-no-repeat px-6 py-3 font-bold text-black w-full justify-center rounded-lg bg-primary-linear transition-all duration-300 ease-out bg-[length:200%] text-xl bg-[200%] hover:bg-[100%] clickable hover:text-white" data-id="{{id}}" value="Delete">
    </td>
  </tr>
</template>


<div class="flex justify-between w-full">
<?php (new Render(ComponentType::AddVehicle))->render_dash(); ?>
<div id="departments" class="flex-[1]">
  <h1 class="font-bold py-4 uppercase">Registered departments</h1>
  <div>
    <table class="w-full whitespace-nowrap">
      <thead class="bg-black/60">
        <th class="text-left py-3 px-2">Brand</th>
        <th class="text-left py-3 px-2">Model</th>
        <th class="text-left py-3 px-2">Registration</th>
        <th class="text-left py-3 px-2">Capacity</th>
        <th class="text-left py-3 px-2">Department</th>
        <th class="text-left py-3 px-2">Actions</th>
      </thead>
     <tbody id="vehicleTable">
     </tbody>
    </table>
  </div>
</div>
</div>
<script src="<?php echo BasePath ?>/scripts/vehicle.js"></script>
