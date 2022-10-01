<?php

$checkdb = check_db_exist("posts");
if(!$checkdb){
    $install = true;
    function install_dbtbl_setup(){
        // sql to create table
    $sql1 = "CREATE TABLE posts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        slug VARCHAR(255) NOT NULL,
        category INT NOT NULL,
        description TEXT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($sql1);
        exit;
    }
}else{
    $install = false;
    function uninstall_dbtbl_setup(){
        sql_drop_table("posts");
        exit;
    }
}
