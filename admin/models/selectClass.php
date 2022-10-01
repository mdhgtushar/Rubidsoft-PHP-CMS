<?php

include("connect.php");

class DBSelect
{
    protected $query;
    protected $table;
    protected $select = "*";
    protected $where;
    protected $data_array;
    function table($table)
    {
        $this->table = $table;
        return $this;
    }
    function select($select)
    {
        $this->select = $select;
        return $this;
    }
    function where($name, $value)
    {
        $this->where = $name . " = " . $value;
        return $this;
    }
    function get()
    {
        global $connect;
        $this->query = "SELECT $this->select FROM $this->table";

        $data = mysqli_query($connect, $this->query);
        if ($data) {
            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_assoc($data))
                    $this->data_array[] = $row;
            }
        }
        return $this->data_array;
    }


    //get site setting
    function get_settings($title)
    {
        global $connect;
        $sql = "SELECT description FROM settings WHERE title='$title' LIMIT 1";
        $result = mysqli_query($connect, $sql);

        if ($result) {

            if (mysqli_num_rows($result) > 0) {
                //print values to screen
                while ($row = mysqli_fetch_assoc($result)) {
                    return $row['description'];
                }
            } else {
                return false;
            }
        }
    }
    //select only first element of data by where condition;
    function sql_select_data_first($table, $where)
    {
        include("connect.php");
        $sql = "SELECT * FROM $table WHERE $where";
        $dataarr;
        $data = mysqli_query($connect, $sql);
        if ($data) {
            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_assoc($data))
                    $dataarr[] = $row;
                return $dataarr[0];
            }
        } else {
            return false;
        }
    }
}
