<?php
session_start();


include_once("models/DB.php");
include_once("helpers/modules.php");
include_once("helpers/installation.php");


class Common
{
    public $site_url = "/rubidsoft";
    function client_template_name()
    {
        global $DBSelect;
        return "templates/" . $DBSelect->get_settings("client_template");
    }
}
$common_page = new Common();
