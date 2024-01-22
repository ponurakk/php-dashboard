<template id="departmentRowTemplate">
  <tr class="border-b border-orange-700 hover:bg-black/30">
    <td class="py-3 px-2">{{name}}</td>
    <td class="py-3 px-2">{{street}}</td>
    <td class="py-3 px-2">{{home_number}}</td>
    <td class="py-3 px-2">{{local_number}}</td>
    <td class="py-3 px-2">{{post_code}}</td>
    <td class="py-3 px-2">{{city}}</td>
    <td class="py-3 px-2">{{phone_number}}</td>
    <td class="py-3 px-2">{{email}}</td>
  </tr>
</template>

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
        <tbody id="departmentTable">
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="<?php echo BasePath ?>/scripts/department.js"></script>
