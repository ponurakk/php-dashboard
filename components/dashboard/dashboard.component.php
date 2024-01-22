<div class="grid grid-cols-3 grid-rows-3 h-full gap-4">
  <?php
  (new Render(ComponentType::Box, "Couriers", 2, Icon::User->value))->render_dash();
  (new Render(ComponentType::Box, "Departments", 1, Icon::Plane->value))->render_dash();
  (new Render(ComponentType::Box, "Vehicles", 2, Icon::Car->value))->render_dash();
  //(new Render(ComponentType::Box))->render_dash();
  //(new Render(ComponentType::Box))->render_dash();
  ?>
</div>
