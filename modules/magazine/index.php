
<br>
<?php 
if(!check_db_exist("magazine")){
  include_once("database.php");
  echo "installing....!!<br>";
  echo "unpacking....!!<br>";
  install_dbtbl_setup();
  echo "DONE :} ";
  exit;
}

if(isset($params[2]) && $params[2] == "add"){
  $rows = [
    ["title" ,"text", "Title"],
    ["description" ,"textarea", "Description"]
  ];
  
    
  if(isset($_POST['addNew'])){
    sql_array_insert_data("magazine", $rows);
  }
  include($admin_template."/module/insert.php");
}else{
  $addUrl = $site_url."/admin/module/".$moduleNameFind."/add";
  $dataTable = "magazine";
  $deleteAble = true;
  $editAble = true;
  $rows = [
    "id" => "ID",
    "title" => "Title",
    "description" => "description"
  ];
  include($admin_template."/module/view.php");
}
?>

