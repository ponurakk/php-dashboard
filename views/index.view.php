<?php
include "./lib/utils.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="/static/index.css" rel="stylesheet">
    </head>

    <body>
        <nav>
            <?php
            (new Render(ComponentType::Register, "Sign Up"))->as_form("/register", "post");
            (new Render(ComponentType::Login, "Sign In"))->as_form("/login", "post");
            ?>
        </nav>
        <header>

        </header>
    </body>
</html>
