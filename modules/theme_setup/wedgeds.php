<?php


$site_setup = $init->get_client_template()."/site_setup/index.php";
if(file_exists($site_setup)) include($site_setup);


if(isset($params[3]) && $params[3] == "header"){
    include("header_setup.php");
}elseif(isset($params[3]) && $params[3] == "sidebar"){
    include("sidebarsetup.php");
}elseif(isset($params[3]) && $params[3] == "content"){
    include("content_block_list.php");
}elseif(isset($params[3]) && $params[3] == "footer"){
    include("footer_setup.php");
}else{
    include("wedgedsList.php");
}


?>