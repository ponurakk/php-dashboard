<div class="flex justify-center items-center z-20 w-screen h-screen">
  <?php
  (new Render(ComponentType::Login, "Sign in", "Login"))->render_form(BasePath."/login", "post");
  ?>
</div>
