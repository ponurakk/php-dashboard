<div class="flex flex-col justify-center px-6 py-12 w-96 lg:px-8 rounded-lg relative bg-black before:absolute before:left-0 before:top-0 before:w-full before:h-full before:-z-10 before:blur-lg before:animate-blur-pulse before:bg-primary-radial">
  <div class="flex justify-center items-center absolute bg-white -top-5 left-1/3 h-1/6 w-1/3 rounded-lg text-black">
    <p class="text-3xl font-bold"><?php echo $args[1] ?></p>
  </div>
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" autocomplete="off" action="<?php echo $action ?>" method="<?php echo $method ?>">
      <div>
        <label for="email" class="block font-large text-lg font-medium leading-6 text-neutral-400">Email address</label>
        <div class="mt-2 relative">
          <div class="text-black absolute left-1 top-1/2 -translate-y-1/2"><?php echo Icon::Mail->value ?></div>
          <input id="email" name="login" type="email" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 sm:text-lg sm:leading-6 focus:outline-none pl-9">
        </div>
      </div>

      <?php
        (new Render(ComponentType::PasswordButton, "Password"))->render();
        if($action == BasePath."/register"){
          (new Render(ComponentType::PasswordButton, "Repeat password"))->render();
        }
      ?>

      <div class="flex justify-center">
        <input type="submit" class="bg-white bg-no-repeat px-6 py-3 font-bold text-black w-1/2 justify-center rounded-lg bg-primary-linear transition-all duration-300 ease-out bg-[length:200%] text-xl bg-[200%] hover:bg-[100%] clickable hover:text-white" value="<?php echo $args[0] ?>">
      </div>
    </form>
    <?php
    
    if ($action == BasePath."/register") {
      (new Render(ComponentType::MemberTxt, "Already have an account?", "Sing in", "/login"))->render();
    } else {
      (new Render(ComponentType::MemberTxt, "Not a member?", "Take your free account", "/register"))->render();
    }
    ?>
  </div>
</div>
