<div class="bg-black w-screen min-h-screen text-slate-300 relative py-4">
  <div class="flex justify-start gap-8 z-20">
    <?php (new Render(ComponentType::SideBar, "Repeat"))->render_dash(); ?>
    <div class="w-[70%] h-[85vh] z-20">
      <div class="bg-neutral-950 w-full h-full rounded-lg relative">
        <div id="content" class="overflow-y-auto w-full h-full p-6">
          <?php
          $uri = explode("/", $_SERVER['REQUEST_URI']);
          switch (end($uri)) {
            case 'couriers':
              (new Render(ComponentType::Couriers))->render_view();
              break;
            case 'departments':
              (new Render(ComponentType::Departments))->render_view();
              break;
            case 'status':
              (new Render(ComponentType::Status))->render_view();
              break;
            case 'vehicles':
              (new Render(ComponentType::Vehicles))->render_view();
              break;
            default:
              break;
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
