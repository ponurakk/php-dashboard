<div class="flex justify-between w-full">
<?php (new Render(ComponentType::AddDepartment))->render_dash(); ?>
<div id="departments" class="flex-[1]">
  <h1 class="font-bold py-4 uppercase">Registered departments</h1>
  <div>
    <table class="w-full whitespace-nowrap">
      <thead class="bg-black/60">
        <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
        <th class="text-left py-3 px-2">Street</th>
        <th class="text-left py-3 px-2">Home Number</th>
        <th class="text-left py-3 px-2">Locale Number</th>
        <th class="text-left py-3 px-2">Post Code</th>
        <th class="text-left py-3 px-2">City</th>
        <th class="text-left py-3 px-2">Phone number</th>
        <th class="text-left py-3 px-2">Email</th>
        <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
      </thead>
      <?php (new Render(ComponentType::DepartmentRow))->render_dash(); ?>
    </table>
  </div>
</div>
</div>
