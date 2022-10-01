<?php

/**
 * Example Application
 *
 * @package Example-application
 */



global $DBTable;

class getModule extends Init
{
    function get_route_module($route)
    {
        global $moduleNameFind;
        $dirr2 = $this->site_url . "/admin/module/" . $moduleNameFind . "/";
        echo $dirr2 . $route;
    }
    public function route($route, $callback)
    {
        global $params;
        if ($route == "" && !isset($params[2])) $callback();
        elseif (isset($params[2]) && $params[2] == $route) $callback();
        else return false;
        exit;
    }

    public function add($table, $rows)
    {
        global $init;
        global $common_page;
        global $moduleNameFind;
        $listUrl = $common_page->site_url . "/admin/module/" . $moduleNameFind;
        if (isset($_POST['addNew'])) {
            sql_array_insert_data($table, $rows);
        }
        include($init->get_admin_template() . "/module/insert.php");
    }
    public function edit($table, $rows)
    {
        global $init;
        global $common_page;
        global $params;
        global $DBSelect;
        global $moduleNameFind;
        $listUrl = $common_page->site_url . "/admin/module/" . $moduleNameFind;
        $dataTable = $table;
        $editId = $params[3];
        $data = $DBSelect->sql_select_data_first($table, "id='$editId'");
        if (isset($_POST['update'])) {
            sql_array_update_data($table, $rows, "id=$editId");
        }
        include($init->get_admin_template() . "/module/edit.php");
    }
    public function index($table, $rows)
    {
        global $init;
        global $common_page;
        global $moduleNameFind;
        global $DBSelect;
        $addUrl = $common_page->site_url . "/admin/module/" . $moduleNameFind . "/add";
        $editUrl = $common_page->site_url . "/admin/module/" . $moduleNameFind . "/edit";
        $dataTable = $table;
        $deleteAble = true;
        $editAble = true;
        include($init->get_admin_template() . "/module/view.php");
    }
    function check($moduleName)
    {
        global $DBTable;
        global $init;
        if (!$DBTable->check_db_exist($moduleName)) {
            // include_once("database.php");
            // echo "installing....!!<br>";
            // echo "unpacking....!!<br>";
            // install_dbtbl_setup();
            // echo "DONE :} ";
            // exit;
            $installation = true;
            include($init->get_admin_template() . "/module/install_module.php");
            exit;
        }
    }
}

if (isset($moduleNameFind)) {
    $getModule = new getModule();
    $dirr = "../modules/" . $moduleNameFind . "/index.php";

    if (file_exists($dirr)) {
        include_once  $dirr;
    } else {
        include($init->get_admin_template() . "/getmodule.php");
    }
} else {
    include($init->get_admin_template() . "/modules.php");
}
