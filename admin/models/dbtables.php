<?php
include_once("functions.php");

$initial_setup = false;
function install_initial_seup(){
    // create settings table
    $settings_table = "CREATE TABLE settings (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        description VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($settings_table);
    // create menus table
    $menus_table = "CREATE TABLE menus (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        menu_id INT NOT NULL,
        name VARCHAR(30) NOT NULL,
        link VARCHAR(30) NOT NULL,
        order_ INT NOT NULL,
        target_ INT NOT NULL,
        status INT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($menus_table);
    // create modules table
    $modules_table = "CREATE TABLE modules (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        status INT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($modules_table);
    // create Pages table
    $pages_table = "CREATE TABLE pages (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        slug VARCHAR(30) NOT NULL,
        body TEXT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($pages_table);
    // create Pages Blocks
    $page_blocks = "CREATE TABLE page_blocks (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        page_id INT NOT NULL,
        theme_name VARCHAR(30) NOT NULL,
        block_name VARCHAR(30) NOT NULL,
        widged_id INT NOT NULL,
        status INT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($page_blocks);
    // create Pages Blocks
    $widgeds_table = "CREATE TABLE widgeds (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        block_name VARCHAR(30) NOT NULL,
        theme_name VARCHAR(30) NOT NULL,
        status INT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($widgeds_table);
    // create Pages Blocks
    $widged_data_table = "CREATE TABLE widged_data (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title TEXT NOT NULL,
        field_name TEXT NOT NULL,
        body TEXT NOT NULL,
        block_id INT NOT NULL,
        widged_id INT NOT NULL,
        theme_name VARCHAR(30) NOT NULL,
        status INT NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        sql_direct_query($widged_data_table);








    //install initial data to database
    $settings_import = "INSERT INTO settings
    ( id, title, description )  VALUES
    (1,'admin_panel_title', 'RubidSoft Official'),
    (2,'client_template', 'twenty_one')
    ;";
    sql_direct_query($settings_import);
}
function uninstall_initial_seup(){
    sql_drop_table("settings");
    sql_drop_table("menus");
    sql_drop_table("pages");
    sql_drop_table("page_blocks");
    sql_drop_table("widgeds");
    sql_drop_table("widged_data");
    sql_drop_table("modules");
}