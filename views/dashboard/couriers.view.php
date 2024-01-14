<?php (new Render(ComponentType::Box, "Repeat"))->render_dash(); ?>
<div id="last-users">
  <h1 class="font-bold py-4 uppercase">Last 24h users</h1>
  <div>
    <table class="w-full whitespace-nowrap">
      <thead class="bg-black/60">
        <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
        <th class="text-left py-3 px-2">Email</th>
        <th class="text-left py-3 px-2">Group</th>
        <th class="text-left py-3 px-2">Status</th>
        <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
      </thead>
      <?php (new Render(ComponentType::Row, "Repeat"))->render_dash(); ?>
    </table>
  </div>
</div>
