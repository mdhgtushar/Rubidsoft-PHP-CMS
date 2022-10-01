<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
    <title>INSTALL & UNINSTALL</title>
</head>
<body>
<?php 
include_once("models/dbtables.php");
include_once("helpers/installation.php");
if(isset($_GET['install'])){
    install_initial_seup();
        echo "<script>window.location.replace('index.php');</script>";
        echo "hello";
    
}
if(isset($_GET['uninstall'])){
    uninstall_initial_seup();
    echo "<script>window.location.replace('index.php');</script>";
}
?>



<div class="relative">
    <div class="h-screen w-full z-10 inset-0 overflow-y-auto">
        <div class="absolute w-full h-full inset-0 bg-indigo-500 opacity-75">
        </div>
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">
            </span>
            <div class="inline-block relative overflow-hidden transform transition-all sm:align-middle sm:max-w-lg" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div>
                    <div class="rounded-lg p-8 bg-white shadow">
                        <div class="bg-white dark:bg-gray-800 ">
                            <div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                                <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                                    <span class="block">
                                    <?php echo $installation ? "You Need To install the database" : "Are You Sure you Want to Uninstall";?>
                                        
                                    </span>
                                    <span class="block text-green-500">
                                        <?php echo $installation ? "You are all set." : "All Data Will Be Deleted";?>
                                    </span>
                                </h2>
                                <div class="lg:mt-0 lg:flex-shrink-0">
                                    <div class="mt-12 inline-flex rounded-md shadow">
                                    <a href="?<?php echo $installation ? "install" : "uninstall";?>"> <button type="button" class="py-4 px-6  bg-<?php echo $installation ? "green" : "red";?>-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    <?php echo $installation ? "Install Now" : "Uninstall Now";?>
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>