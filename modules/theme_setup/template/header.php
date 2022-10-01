<nav class="flex bg-white flex-wrap items-center justify-between p-4 bg-indigo-500 text-white">
    <div class="lg:order-2 w-auto lg:w-1/5 lg:text-center">
        <a class="text-xl text-white font-semibold font-heading" href="#">
            Site Setup
        </a>
    </div>
    <div class="block lg:hidden">
        <button class="navbar-burger flex items-center py-2 px-3 text-indigo-500 rounded border border-indigo-500">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>
                    Menu
                </title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
                </path>
            </svg>
        </button>
    </div>
    <div class="navbar-menu hidden lg:order-1 lg:block w-full lg:w-2/5">
        <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-white hover:text-indigo-600" href="<?php echo $getModule->get_route_module('theme');?>">
            Theme
        </a>
        <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-white hover:text-indigo-600" href="<?php echo  $getModule->get_route_module('pages');?>">
            Pages
        </a>
    </div>
    <div class="navbar-menu hidden lg:order-3 lg:block w-full lg:w-2/5 lg:text-right">
        <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-white hover:text-indigo-600" href="<?php echo  $getModule->get_route_module('menus');?>">
            Menus
        </a>
        <a class="block lg:inline-block mt-4 lg:mt-0 mr-10 text-white hover:text-indigo-600" href="<?php echo  $getModule->get_route_module('wedgeds');?>">
            Wedgeds
        </a>
    </div>
</nav>