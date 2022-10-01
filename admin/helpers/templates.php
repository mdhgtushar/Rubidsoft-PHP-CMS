<?php

function get_client_template(){
    
$dir = "../templates";
$list=scandir($dir);
$dataArray1 = [];
foreach($list as $value){
    if($value!='..' &&  $value!="."){
         $directories[]=$value;
    }
    if($value!='..' &&  $value!="." && !is_file($dir.'/'.$value) ){
	    $dirname = $directories[]=$value;
        array_push($dataArray1, $dirname);
	}
}
return $dataArray1;
}
