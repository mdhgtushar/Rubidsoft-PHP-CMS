<?php

$checkdb = check_db_exist("contacts");
if(!$checkdb){
    $install = true;
    function install_dbtbl_setup(){
        // sql to create table
    $sql1 = "CREATE TABLE contacts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        subject VARCHAR(60) NOT NULL,
        description TEXT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($sql1);
        exit;
    }
}else{
    $install = false;
    function uninstall_dbtbl_setup(){
        sql_drop_table("contacts");
        exit;
    }
}
