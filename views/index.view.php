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
    
    <header>
        
    </header>
    <nav>
        <?php
            render("rej.php", "post");
            render("login.php", "post");
        ?>
        <!-- <form action="rej.php" method="post">
            <label for="login">login : <input id="login" type="text" name="login"></label>   
            <label for="passwoerd">password : <input type="password" name="password"></label>
            <input type="submit" value="sign up">
        </form>
        <form action="log.php" method="post">
            <label for="login">login : <input id="login" type="text" name="login"></label>   
            <label for="passwoerd">password : <input type="password" name="password"></label>
            <input type="submit" value="sign in">
        </form> -->
    </nav>
</body>
</html>
