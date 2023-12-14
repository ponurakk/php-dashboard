<form class="bg-zinc-800 rounded-lg flex flex-col text-right h-96 w-72" action="<?php echo $action ?>" method="<?php echo $method ?>">
    <label for="login" class="bg-zinc-600 rounded-lg flex items-center w-40">
        Login:
        <div class="border border-zinc-400 h-4/5 w-0 inline-block mx-2"></div>
        <input class=" focus:outline-none text-center bg-zinc-600 rounded-r-lg appearance-none" id="login" type="text" name="login">
    </label>
    <label for="password" class=" focus:outline-none bg-zinc-600 rounded-lg ">Password: <input class="bg-zinc-600 rounded-r-lg" type="password" name="password"></label>
    <input type="submit" class="rounded-lg bg-green-400" value="<?php echo $args[0] ?>">
</form>
