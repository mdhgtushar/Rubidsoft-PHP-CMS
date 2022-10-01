<?php


if (isset($_POST['activate']) && isset($_POST['templatename'])) {
    $templateName = $_POST['templatename'];
    sql_update_data("settings", "description='$templateName'", "title='client_template'");
}

include_once("helpers/templates.php");
$client_template = "templates/" . $DBSelect->get_settings("client_template");

$client_template_list = get_client_template();
include("template/site_setup.php");
