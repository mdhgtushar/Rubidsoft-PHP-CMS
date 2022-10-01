<?php

$checkdb = check_db_exist("teachers");
if(!$checkdb){
    $install = true;
    function install_dbtbl_setup(){
        // sql to create table
    $sql1 = "CREATE TABLE teachers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        cid INT NOT NULL,
        title1 VARCHAR(60) NOT NULL,
        title2 VARCHAR(60) NOT NULL,
        email VARCHAR(60) NOT NULL,
        img VARCHAR(60) NOT NULL,
        education VARCHAR(60) NOT NULL,
        phone VARCHAR(60) NOT NULL,
        address VARCHAR(60) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($sql1);
        exit;
    }
}else{
    $install = false;
    function uninstall_dbtbl_setup(){
        sql_drop_table("teachers");
        exit;
    }
}
