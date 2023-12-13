<div>
    <nav>
        <?php
        (new Render(ComponentType::Register, "Sign Up"))->as_form(BasePath."/register", "post");
        (new Render(ComponentType::Login, "Sign In"))->as_form(BasePath."/login", "post");
        ?>
    </nav>
    <header>

    </header>
</div>
