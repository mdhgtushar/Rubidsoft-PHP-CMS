<?php
/**
 * Example Application
 *
 * @package Example-application
 */

if(isset($_POST["activate"])){
    $moduleName = $_POST['moduleName'];
    $install = sql_select_data_first("modules", "name='$moduleName'");
    if($install){
        sql_update_data("modules", "status=1", "name='$moduleName'");
    }else{
        sql_insert_data("modules", "name,status", "'$moduleName', 1");
    }
}
if(isset($_POST["deactivate"])){
    $moduleName = $_POST['moduleName'];
    $install = sql_select_data_first("modules", "name='$moduleName'");
    if($install){
        sql_update_data("modules", "status=0", "name='$moduleName'");
    }else{
        sql_insert_data("modules", "name,status", "'$moduleName', 0");
    }
}

include($init->admin_template."/modules.php");
