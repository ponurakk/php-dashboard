<div>
    <nav>
        <?php
        (new Render(ComponentType::Register, "Sign Up"))->as_form("$basePath/register", "post");
        (new Render(ComponentType::Login, "Sign In"))->as_form("$basePath/login", "post");
        ?>
    </nav>
    <header>

    </header>
</div>
