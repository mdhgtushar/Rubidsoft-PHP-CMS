<?php
include_once("admin/common.php");


class Init_client extends Common{
    

    function frontend_template($file){
        return $this->client_template_name()."/".$file;
    }
    function get_media($file){
        return "admin/uploads/".$file; 
    }
}

$init = new Init_client();
?>

