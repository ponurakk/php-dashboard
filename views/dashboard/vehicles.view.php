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
      <?php (new Render(ComponentType::VehicleRow))->render_dash(); ?>
    </table>
  </div>
</div>
</div>
