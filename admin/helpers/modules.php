<?php

function get_modules_from_directory()
{
    global $common_page;
    $moduledir = "C:/xampp/htdocs/" . $common_page->site_url . "/modules";
    $list = scandir($moduledir);


    $dataArray = [];
    foreach ($list as $value) {
        if ($value != '..' &&  $value != ".") {
            $directories[] = $value;
        }
        if ($value != '..' &&  $value != "." && !is_file($moduledir . '/' . $value)) {
            $dirname1 = $directories[] = $value;
            $dir = $moduledir . "/" . $dirname1;
            $list = scandir($dir);
            foreach ($list as $value) {
                if ($value != '..' &&  $value != ".") {
                    $dirname = $directories[] = $value;
                    if ($dirname == "config.php") {
                        $dirr = $moduledir . "/" . $dirname1 . '/' . $dirname;


                        if (file_exists($dirr)) {
                            include($dirr);

                            array_push($dataArray, $config);
                        } else {
                            echo "Not found";
                        }
                    }
                }
            }
        }
    }
    return $dataArray;
}
