<?php
$installation = true;
if (
    $DBTable->check_db_exist("settings") &&
    $DBTable->check_db_exist("menus") &&
    $DBTable->check_db_exist("pages") &&
    $DBTable->check_db_exist("modules")
) {
    $installation = false;
}
