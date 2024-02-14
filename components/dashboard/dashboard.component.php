<div class="grid grid-cols-3 grid-rows-3 h-full gap-4">
  <?php
  $db = new Database();
  $counts = $db->getRowCounts();
  (new Render(ComponentType::Box, "Couriers", $counts["couriers"], Icon::User->value))->render_dash();
  (new Render(ComponentType::Box, "Departments", $counts["departments"], Icon::Home->value))->render_dash();
  (new Render(ComponentType::Box, "Vehicles", $counts["vehicles"], Icon::Car->value))->render_dash();
  (new Render(ComponentType::Box, "Orders", $counts["orders"], Icon::Package->value))->render_dash();
  (new Render(ComponentType::Box, "Deliveries", $counts["delivery"], Icon::Plane->value))->render_dash();
  (new Render(ComponentType::Box, "Routes", $counts["routes"], Icon::Route->value))->render_dash();
  (new Render(ComponentType::Box, "Complaints", $counts["complaints"], Icon::MessageShare->value))->render_dash();
  ?>
</div>
