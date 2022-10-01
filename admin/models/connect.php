<?php

$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$connect = mysqli_connect($dbhost, $username, $password, $dbname);

if(!$connect){
    echo "error to connect";
}


