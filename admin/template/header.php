<!DOCTYPE html>
<html>

<head>
    <title>header</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="<?php echo $init->admin_template("assets/css/style.css"); ?>">
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.15.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

<body>
    <section>
        <div class="header" style="top:0">
            <div class="menu">
                <div class="flex items-center">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="#">
                            Home
                        </a>
                        <a class="text-gray-800 dark:text-white hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="#">
                            Gallery
                        </a>
                        <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="#">
                            Content
                        </a>
                        <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="#">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
            <div class="search-container">
                <div class="relative flex items-center w-full lg:w-64 h-full group">
                    <div class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                        <svg fill="none" class="relative w-5 h-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <svg class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                    </svg>
                    <input type="text" class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input" placeholder="Search" />
                    <div class="absolute right-0 hidden h-auto px-2 py-1 mr-2 text-xs text-gray-400 border border-gray-300 rounded-2xl md:block">
                        +
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="sidebar">
            <div class="header-sub">
                <div class="flex items-center logo">
                    <img src="<?php echo $init->admin_template("assets/img/logo.png"); ?>" />
                </div>
            </div>

            <div class="p-4 bg-white dark:bg-gray-800">
                <div class="flex flex-row items-start gap-4">
                    <img src="https://avatars.githubusercontent.com/u/81422400?v=4" class="w-28 h-28 rounded-lg" />
                    <div class="h-28 w-full flex flex-col justify-between">
                        <div>
                            <p class="text-gray-800 dark:text-white text-xl font-medium">
                                <?php echo $init->admin_panel_title(); ?>
                            </p>
                            <p class="text-gray-400 text-xs">
                                FullStack dev
                            </p>
                        </div>
                        <div class="rounded-lg bg-blue-100 dark:bg-white p-2 w-full">
                            <div class="flex items-center justify-between text-xs text-gray-400 dark:text-black">
                                <p class="flex flex-col">
                                    Articles
                                    <span class="text-black dark:text-indigo-500 font-bold">
                                        34
                                    </span>
                                </p>
                                <p class="flex flex-col">
                                    Followers
                                    <span class="text-black dark:text-indigo-500 font-bold">
                                        455
                                    </span>
                                </p>
                                <p class="flex flex-col">
                                    Rating
                                    <span class="text-black dark:text-indigo-500 font-bold">
                                        9.3
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 mt-6">
                    <button type="button" class="w-1/2 px-4 py-2 text-base border rounded-lg text-grey-500 bg-white hover:bg-gray-200">
                        Site Settings
                    </button>
                    <a type="button" href="<?php echo $common_page->site_url; ?>" target="blank" class="w-1/2 text-center px-4 py-2 text-base border rounded-lg text-white bg-indigo-500 hover:bg-indigo-700">
                        View Site
                    </a>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800">
                <nav class="mt-10 px-6">
                    <a class="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500" href="<?php echo $init->get_route("dashbord"); ?>">
                        <span class="text-left">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z"></path>
                            </svg>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            Dashboard
                        </span>
                    </a>
                    <a class="hover:border-blue-500 hover:text-blue-500 hover:bg-blue-100 hover:to-blue-100 w-full font-thin uppercase text-black-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-gray-100 border-r-4 border-gray-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-black-500" href="<?php echo $init->get_route("modules"); ?>">
                        <span class="text-left">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z"></path>
                            </svg>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            Modules
                        </span>
                    </a>
                    <a class="hover:border-blue-500 hover:text-blue-500 hover:bg-blue-100 hover:to-blue-100 w-full font-thin uppercase text-black-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-gray-100 border-r-4 border-gray-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-black-500" href="<?php echo $init->get_route("settings"); ?>">
                        <span class="text-left">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z"></path>
                            </svg>
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            Settings
                        </span>
                    </a>
                    <div>
                        <p class="text-gray-300 ml-2 w-full border-b-2 pb-2 border-gray-100 mb-4 text-md font-normal">
                            Addons
                        </p>

                        <?php
                        $dataArray = $init->get_modules();
                        foreach ($dataArray as $sidebar) {

                            $moduleURI = $sidebar["module_menu"]["moduleURI"];
                            $install = $DBSelect->sql_select_data_first("modules", "name='$moduleURI' AND status=1");
                            if (!$install) {
                                continue;
                            }
                            if (isset($_GET['moduleName'])) {
                                if ($moduleURI == $_GET['moduleName']) {
                                    $active = "active";
                                } else {
                                    $active = "";
                                }
                            } else {
                                $active = "";
                            }
                        ?>
                            <a class="hover:border-blue-500 hover:text-blue-500 hover:bg-blue-100 hover:to-blue-100 w-full font-thin uppercase text-black-500 flex items-center p-3 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-gray-100 border-r-3 border-gray-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-black-500" href="<?php echo $init->get_route("module/" . $moduleURI); ?>">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z"></path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    <?php echo $sidebar["module_menu"]['moduleName']; ?>
                                </span>
                            </a>
                        <?php
                        } ?>
                    </div>
                </nav>
            </div>

            <form class="flex w-full space-x-3">
                <div class="w-full max-w-2xl px-5 py-10 m-auto mt-10 bg-white dark:bg-gray-800">
                    <div class="mb-6 text-2xl font-light text-gray-800 dark:text-white">
                        Open a support ticket !
                    </div>
                    <div class="grid max-w-xl grid-cols-2 gap-4 m-auto">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="relative">
                                <input type="text" id="contact-form-name" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Name" />
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="relative">
                                <input type="text" id="contact-form-email" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="email" />
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label class="text-gray-700" for="name">
                                <textarea class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" id="comment" placeholder="Enter your comment" name="comment" rows="5" cols="40">
                                    </textarea>
                            </label>
                        </div>
                        <div class="col-span-2 text-right">
                            <button type="submit" class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mt-10 px-6">
                <h4>About hireing</h4>
                <p>Subscribe to watch the missed episodes from your favourite programs.</p>
                <a class="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500" href="index.php">
                    <span class="text-left">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z"></path>
                        </svg>
                    </span>
                    <span class="mx-4 text-sm font-normal">
                        Dashboard
                    </span>
                </a>
                <p>all &copy copyright reserved by md hg tushar</p>
                <br />
            </div>
        </div>

        <section class="container_custom">