
<br>
<?php 
if(!check_db_exist("posts")){
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
    ["title", "text", "Title"],
    ["slug", "text", "Slug"],
    ["category", "text", "Category"],
    ["description", "textarea", "Message"],
  ];
  if(isset($_POST['addNew'])){
    sql_array_insert_data("posts", $rows);
  }
  
  include($admin_template."/module/insert.php");
}else{
  $dataTable = "posts";
  $deleteAble = true;
  $editAble = true;

  $rows = [
    "id" => "ID",
    "title" => "Title",
    "slug" => "Slug",
    "category" => "Category",
  ];



  include($admin_template."/module/view.php");
}
?>

