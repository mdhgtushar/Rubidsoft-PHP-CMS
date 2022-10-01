
<br>
<?php 
if(!check_db_exist("notice")){
  include_once("database.php");
  echo "installing....!!<br>";
  echo "unpacking....!!<br>";
  install_dbtbl_setup();
  echo "DONE :} ";
  exit;
}
$moduleName = $_GET['moduleName'];
if(isset($_GET['add'])){
  $rows = [
    ["title" ,"text", "Title"],
    ["description" ,"textarea", "Description"]
  ];
  
    
  if(isset($_POST['addNew'])){
    sql_array_insert_data("notice", $rows);
  }
  include($admin_template."/module/insert.php");
}else{
  $dataTable = "notice";
  $deleteAble = true;
  $editAble = true;
  $rows = [
    "id" => "ID",
    "title" => "Full Name",
    "description" => "Description"
  ];
  include($admin_template."/module/view.php");
}
?>

