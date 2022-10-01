<?php

include("connect.php");

class DBObj{
    public $dataArray;
    public $sqlData;
    public $status;
    

    /*==========
    @Query Type: GENERAL;
    ==========*/

    //parematers: full sql querys
    function sql_direct_query($sql_statement){

    }
    /*==========
    @Query Type: INSERT;
    ==========*/
    function sql_insert_data($sql_statement){

    }
    /*==========
    @Query Type: SELECT;
    ==========*/
    function sql_select_data($sql_statement){

    }
    /*==========
    @Query Type: UPDATE;
    ==========*/
    function sql_update_data($sql_statement){

    }
    /*==========
    @Query Type: DELETE;
    ==========*/
    function sql_delete_data($sql_statement){

    }
}