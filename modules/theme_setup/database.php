<?php

$checkdb = check_db_exist("site_setup");
if(!$checkdb){
    $install = true;
    function install_dbtbl_setup(){
        // sql to create table
    $sql1 = "CREATE TABLE site_setup (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        body TEXT NOT NULL,
        parent_id INT NOT NULL,
        priority INT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($sql1);
        exit;
    }
}else{
    $install = false;
    function uninstall_dbtbl_setup(){
        sql_drop_table("site_setup");
        exit;
    }
}
