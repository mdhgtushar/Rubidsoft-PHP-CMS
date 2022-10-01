<?php
require("init.php");
#replace demo/ in the request URL with an empty string
$request  = str_replace($common_page->site_url . "/admin/", "", $_SERVER['REQUEST_URI']);

#split the path by '/'
$params     = explode("/", $request);



if ($params[0] == "" || $params[0] == "dashbord") {
  include("index.php");
} elseif ($params[0] == "login") {
  echo "<script>window.location.replace('login.php');</script>";
} elseif ($params[0] == "modules") {
  include("modules.php");
} elseif ($params[0] == "settings") {
  include("settings.php");
} elseif ($params[0] == "module" && isset($params[1])) {
  $moduleNameFind = $params[1];
  include("getmodule.php");
} elseif ($params[0] == "") {
} else {
  echo "Page Not Found";
}
