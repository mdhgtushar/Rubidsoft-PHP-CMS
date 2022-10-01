<?php
include_once("init.php");

$client_template = "templates/" . $DBSelect->get_settings("client_template");
#replace demo/ in the request URL with an empty string
$request  = str_replace($common_page->site_url . "/", "", $_SERVER['REQUEST_URI']);

#split the path by '/'
$params     = explode("/", $request);

$page_slug = $params[0];
if ($page_slug == "") {
    $page_slug = "home";
}
$page = $DBSelect->sql_select_data_first('pages', "slug='$page_slug'");
if (file_exists(($client_template . "/head.php"))) {
    include_once($client_template . "/head.php");
} else {
    echo "<b>head.php</b> file not exists on template folder<br>";
}
if ($page) {
    if (file_exists($client_template . '/page.php')) {
        include($client_template . '/page.php');
    } else {
        echo "<b>page.php</b> file not exists on template folder<br>";
    }
} else {
    $page = $DBSelect->sql_select_data_first('pages', "slug='404_not_found'");
    if (file_exists($client_template . '/page.php')) {
        include($client_template . '/page.php');
    } else {
        echo "<b>page.php</b> file not exists on template folder<br>";
    }
}
if (file_exists($client_template . "/foot.php")) {

    include($client_template . "/foot.php");
} else {
    echo "<b>foot.php</b> file not exists on template folder<br>";
}
