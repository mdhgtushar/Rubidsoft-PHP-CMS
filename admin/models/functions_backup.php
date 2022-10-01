<?php
/*
@Title        : Function.php is a all function files for database query PHP MYSQL;
@Description  :
*/

//include the databse connection
include("connect.php");







//sql direct qurery recived by paramater
function sql_direct_query($sql)
{
  include("connect.php");
  $data = mysqli_query($connect, $sql);
  if ($data) {
    return true;
    echo "Successful!";
  } else {
    return false;
    echo "Error : " . mysqli_error($connect);
  }
}
// function sql_direct_query($sql){
//   include("connect.php");
//   $data = mysqli_query($connect, $sql);
//   $dataArray;
//   if ($data) {
//     if (mysqli_num_rows($data) > 0) {
//     while ($row = mysqli_fetch_assoc($data))
//     $dataArray[] = $row;
//     return $dataarr;
//     }
//     echo "Successful!";
//   }else{
//     return false;
//     echo "Error : " . mysqli_error($connect);
//   }
// }



/*
====================================
@Query_TYPE       : INSERT DATA;
@Description      : create data by function;
@Total_FUNCTION   : 5;
====================================
*/

//insert data on a table table name row name and data are required
function sql_insert_data($table, $row, $data)
{
  $sql = "INSERT INTO $table ($row) VALUES ($data)";
  sql_direct_query($sql);
}


function sql_array_insert_data($table, $rows)
{

  include("connect.php");
  $fields = " ";
  foreach ($rows as $row) {
    if ($fields != " ") {
      $fields .= ", ";
    }
    $fields .= $row[0];
  }
  $valus = " ";
  foreach ($rows as $row) {
    if ($valus != " ") {
      $valus .= ", ";
    }
    $valus .= "'" . $_POST[$row[0]] . "'";
  }
  $sql = "INSERT INTO $table ($fields)
VALUES ($valus)";

  if (mysqli_query($connect, $sql)) {
    echo "Succesfull";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
}



/*
====================================
@Query_TYPE       : SELECT DATA;
@Description      : create data by function;
@Total_FUNCTION   : 5;
====================================
*/

//select data form table and where condition(id=1) this not required
function sql_select_data($table, $where = null)
{
  include("connect.php");
  $where ? $where = "WHERE " . $where : $where = null;
  $sql = "SELECT * FROM $table $where";
  $dataarr;
  $data = mysqli_query($connect, $sql);
  if ($data) {
    if (mysqli_num_rows($data) > 0) {
      while ($row = mysqli_fetch_assoc($data))
        $dataarr[] = $row;
      return $dataarr;
    }
  }
}

function sql_select_last_single_string($select, $table, $where)
{
  include("connect.php");
  $result = mysqli_query($connect, "SELECT $select FROM $table WHERE $where LIMIT 1");

  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      //print values to screen
      while ($row = mysqli_fetch_assoc($result)) {
        return $row[$select];
      }
    } else {
      return false;
    }
  }
}
function get_site_setting($title)
{
  include("connect.php");
  $sql = "SELECT body FROM site_setup WHERE title='$title' LIMIT 1";
  $result = mysqli_query($connect, $sql);

  if ($result) {

    if (mysqli_num_rows($result) > 0) {
      //print values to screen
      while ($row = mysqli_fetch_assoc($result)) {
        return $row['body'];
      }
    } else {
      return false;
    }
  }
}
function get_settings($title)
{
  include("connect.php");
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

/*
====================================
@Query_TYPE       : Update DATA;
@Description      : create data by function;
@Total_FUNCTION   : 5;
====================================
*/

//updatate data table name and setu value (fildname=value) and where condition (id=1)
function sql_update_data($table, $set, $where)
{
  $sql = "UPDATE $table SET $set WHERE $where";
  sql_direct_query($sql);
}

function sql_array_update_data($table, $rows, $where)
{

  include("connect.php");
  $set = " ";
  foreach ($rows as $row) {
    if ($set != " ") {
      $set .= ", ";
    }

    $set .= $row[0] . "='" . $_POST[$row[0]] . "'";
  }
  $sql = "UPDATE $table SET $set WHERE $where";

  if (mysqli_query($connect, $sql)) {
    echo "Succesfull";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
}

/*
====================================
@Query_TYPE       : Delete DATA;
@Description      : create data by function;
@Total_FUNCTION   : 5;
====================================
*/

//droping a table only table name is required
function sql_drop_table($table)
{
  $sql = "DROP TABLE " . $table;
  sql_direct_query($sql);
}

function sql_delete_data($table, $where)
{
  $sql = "DELETE FROM $table WHERE $where";
  sql_direct_query($sql);
}









function check_db_exist($table)
{
  include("connect.php");
  $sql = "DESC $table;";
  if (mysqli_query($connect, $sql)) {
    return true;
  } else {
    return false;
  }
}
