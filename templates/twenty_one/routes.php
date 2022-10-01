<?php
  #replace demo/ in the request URL with an empty string
  $request  = str_replace("/php_mvc/", "", $_SERVER['REQUEST_URI']);
  
  #split the path by '/'
  $params     = explode("/", $request);
  
  if($params[0] == "" || $params[0] == "home"){
    include("index.php");
  }else{
    echo "hello";
  }

