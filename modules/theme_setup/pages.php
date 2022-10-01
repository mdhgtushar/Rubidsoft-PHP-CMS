
<?php


$site_setup = "../".$common_page->client_template_name()."/site_setup/index.php";
if(file_exists($site_setup)) include($site_setup);

echo "<br>";
$moduleName = "theme_setup";

if(isset($params[3]) && $params[3] == "add"){
    $rows = [
        ["title" , "text", "Tittle"],
        ["slug" ,  "text", "Slug"]
      ];
  if(isset($_POST['addNew'])){
    sql_array_insert_data("pages", $rows);
  }
  include($init->admin_template."/module/insert.php");
}elseif(isset($params[3]) && $params[3] == "edit"){
  
  $listUrl = $common_page->site_url."/admin/module/".$moduleNameFind."/pages";
  $dataTable = "pages";
  $editId = $params[4];
  $rows = [
      ["title" , "text", "Tittle"],
      ["slug" ,  "text", "Slug"],
      ["body" , "textarea",  "Body"]
    ];
    if(isset($_POST['show'])){
      $page = sql_select_data_first($dataTable, "id='$editId'");
      $blockTitle = $_POST["blockTitle"];
      if($page['body']){
        echo $blockTitle =  $page['body'].",".$blockTitle;
       }
      //sql_update_data($dataTable, "body='$blockTitle'", "id=$editId");
    }
    if(isset($_POST['delete'])){
     echo $blockTitle = $_POST["blockTitle"];
     sql_delete_data("page_blocks", "id=$blockTitle");
    }
    if(isset($_POST['submit_block'])){
    echo $blockTitle = $_POST["block_name"];
     sql_insert_data("page_blocks", "block_name,page_id,theme_name","'$blockTitle',$editId,'$client_template'");
    }
  $page = sql_select_data_first($dataTable, "id='$editId'");
include("template/pageEditor.php");
}else{
  $addUrl = $common_page->site_url."/admin/module/".$moduleNameFind."/pages/add";
  $editUrl = $common_page->site_url."/admin/module/".$moduleNameFind."/pages/edit";
  $dataTable  = "pages";
  $deleteAble = true;
  $editAble = true;

  $rows = [
    "id" => "ID",
    "title" => "Tittle",
    "slug" => "Slug"
  ];
  include($init->admin_template."/module/view.php");
}



?>
