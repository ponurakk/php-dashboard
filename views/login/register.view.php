<div>
  <main class="relative">
    <div class="flex justify-center items-center z-20 absolute w-screen h-screen">
      <?php
      (new Render(ComponentType::Register, "Sign up", "Register"))->render_form(BasePath."/register", "post");
      ?>
    </div>
  </main>
</div>
