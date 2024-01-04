<div id="menu" class="bg-white/10 col-span-3 rounded-lg p-4 ">
    <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 justify-center items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
        <?php echo Icon::Account->value ?>
        <p class="font-medium leading-4">Account</p>
    </div>
    <hr class="my-2 border-orange-700">
    <div id="menu" class="flex flex-col space-y-2 my-5">
        <a class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
            <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 justify-center items-center">
                <?php echo Icon::Briefcase->value ?>
                <p class="font-bold text-base lg:text-lg text-slate-200">Kurierzy</p>
            </div>
        </a>
        <a class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
            <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 justify-center items-center">
                <?php echo Icon::File->value ?>
                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4">Oddziały</p>
            </div>
        </a>
        <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
            <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 justify-center items-center">
                <?php echo Icon::Filesad->value ?>
                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 ">Status</p>
            </div>
        </a>
        <a href="#" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
            <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 justify-center items-center">
                <?php echo Icon::Car->value ?>
                <p class="font-bold text-base lg:text-lg text-slate-200 leading-4 ">Pojazdy</p>
            </div>
        </a>
    </div>
</div>