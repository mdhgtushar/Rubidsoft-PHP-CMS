<?php
include("connect.php");
class DBTable
{

    function check_db_exist($table)
    {
        global $connect;
        $sql = "DESC $table;";
        if (mysqli_query($connect, $sql)) {
            return true;
        } else {
            return false;
        }
    }
}
