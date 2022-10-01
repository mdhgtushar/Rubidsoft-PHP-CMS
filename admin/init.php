<?php
include_once("common.php");




class Init extends Common
{
    public $admin_panel_title;
    public $admin_template;


    function admin_panel_title()
    {
        global $DBSelect;
        $this->admin_panel_title = $DBSelect->get_settings("admin_panel_title");
        $this->admin_panel_title ? $this->admin_panel_title : $this->admin_panel_title = "Starter Template";
        return $this->admin_panel_title;
    }
    function get_admin_template()
    {
        return $this->admin_template = "C:/xampp/htdocs/" . $this->site_url . "/admin/template";
    }
    function get_modules()
    {
        return get_modules_from_directory();
    }
    function get_client_template()
    {
        global $DBSelect;
        return "../templates/" . $DBSelect->get_settings("client_template");
    }
    function admin_template($file)
    {
        return $this->site_url . "/admin/template/" . $file;
    }
    function client_template($file)
    {
        return $this->site_url . "/templates/" . $file;
    }
    function get_route($route)
    {
        return $this->site_url . "/admin/" . $route;
    }
}

$init = new Init();

if (file_exists($init->get_admin_template() . "/header.php")) {
    include_once($init->get_admin_template() . "/header.php");
} else echo "header file not found";


if ($installation) {
    echo "<script>window.location.replace('install.php');</script>";
}

if (!$_SESSION["logged_in"]) {
    echo "<script>window.location.replace('login.php');</script>";
}
