<div>
    <main class="relative">
        <!-- <img class="w-screen h-screen z-10 absolute bg-center bg-cover object-cover" src="http://localhost/kszamp/php-dashboard/views/box.png">
        <img class="w-screen h-screen z-20 absolute blur bg-center bg-cover object-cover" src="http://localhost/kszamp/php-dashboard/views/box.png"> -->
        <div class="flex justify-center items-center z-20 absolute w-screen h-screen">
            <?php
                (new Render(ComponentType::Register, "Sign Up"))->as_form(BasePath."/login", "post");
            ?>
        </div>
        
    </main>
    <?php
    // (new Render(ComponentType::Register, "Sign Up"))->as_form("/php-dashboard/register", "post");
    // (new Render(ComponentType::Login, "Sign In"))->as_form("/php-dashboard/login", "post");
    ?>
</div>

