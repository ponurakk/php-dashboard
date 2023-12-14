<form class="bg-zinc-800 rounded-lg flex flex-col text-right h-96 w-72" action="<?php echo $action ?>" method="<?php echo $method ?>">
    <label for="login" class="bg-teal-600 rounded-lg">Login: <input class="text-center bg-teal-600 rounded-r-lg" id="login" type="text" name="login"></label>
    <label for="password">Password: <input class="bg-teal-600 rounded-r-lg" type="password" name="password"></label>
    <input type="submit" value="<?php echo $args[0] ?>">
</form>
