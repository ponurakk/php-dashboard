<div>
  <main class="relative">
    <div class="flex justify-center items-center z-20 absolute w-screen h-screen">
      <?php
      (new Render(ComponentType::Login, "Sign in", "Login"))->as_form(BasePath."/login", "post");
      ?>
    </div>
  </main>
</div>
