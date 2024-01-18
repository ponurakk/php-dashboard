<div id="menu" class="z-20 w-3/12 h-[85vh] max-w-xs">
  <div class="bg-neutral-950 h-full rounded-tr-lg rounded-br-lg p-4 relative
    before:absolute before:left-0 before:top-0 before:w-full before:h-full before:-z-10 before:blur-lg before:animate-blur-pulse before:bg-primary-radial
    ">
    <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 justify-center items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
      <?php echo Icon::Account->value ?>
      <p class="font-medium leading-4">Account</p>
    </div>
    <hr class="my-2 border-orange-700">
    <div id="menu" class="flex flex-col space-y-2 my-5">
      <a href="<?php echo BasePath?>/dashboard/couriers" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="flex flex-col space-y-2 space-x-2 md:flex-row md:space-y-0 justify-center items-center">
          <?php echo Icon::Briefcase->value ?>
          <p class="font-bold text-base lg:text-lg text-slate-200">Couriers</p>
        </div>
      </a>
      <a href="<?php echo BasePath?>/dashboard/departments" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="relative flex flex-col space-y-2 space-x-2 md:flex-row md:space-y-0 justify-center items-center">
          <?php echo Icon::File->value ?>
          <p class="font-bold text-base lg:text-lg text-slate-200 leading-4">Departments</p>
        </div>
      </a>
      <a href="<?php echo BasePath?>/dashboard/vehicles" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="flex flex-col space-y-2 space-x-2 md:flex-row md:space-y-0 justify-center items-center">
          <?php echo Icon::Car->value ?>
          <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 ">Vehicles</p>
        </div>
      </a>
      <a href="<?php echo BasePath?>/dashboard/status" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="flex flex-col space-y-2 space-x-2 md:flex-row md:space-y-0 justify-center items-center">
          <?php echo Icon::FileHappy->value ?>
          <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 ">Status</p>
        </div>
      </a>
    </div>
  </div>
</div>
