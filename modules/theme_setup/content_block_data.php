
<?php


$moduleName = "menu";


if(isset($params[5]) && $params[5] == "add"){
  $block_name = $content_block[$params[4]]["title"];
    $rows = [
        ["title" , "text", "title"]
      ];
  if(isset($_POST['addNew'])){
  $title = $_POST["title"];
  $client_template_setup = get_settings("client_template");
    sql_insert_data("widgeds", "title,block_name,theme_name","'$title','$block_name','$client_template_setup'");
  }
  
  include($admin_template."/module/insert.php");
}elseif(isset($params[5]) && $params[5] == "edit"){
  $block_name = $content_block[$params[4]]["title"];
  $listUrl = $site_url."/admin/module/".$moduleNameFind."/site_setup/wedgeds/content/";
  $dataTable = "widged_data";
  $editId = $params[4];
  $client_template_setup = get_settings("client_template");

  $rows = $content_block[$params[4]]["fields"];

  // $rows = [
  //   ["menu_id" , "select", "Menu Id"],
  //   ["name" , "text", "Name"],
  //   ["link" ,  "text", "Link"],
  //   ["target_" , "select",  "Target"],
  //   ["status" , "select", "Status"],
  // ];
    if(isset($_POST['update'])){
  foreach($rows as $row){
   $field_name = $row[0];
   $body = $_POST[$row[0]];
    $widged_id = $params[6];
   $data = sql_select_data_first($dataTable, "field_name='$field_name' AND widged_id=$widged_id");
    if($data){
    sql_update_data($dataTable, "body='$body'", "field_name='$field_name' AND widged_id=$widged_id");
    }else{
      sql_insert_data($dataTable, "field_name,body,block_id,theme_name,widged_id","'$field_name','$body','$editId','$client_template_setup',$widged_id");
    }
  }
    }
include("content_block_data_edit.php");
}else{
  $block_name = $content_block[$params[4]]["title"];
  $addUrl = $site_url."/admin/module/".$moduleNameFind."/wedgeds/content/".$params[4]."/add";
  $editUrl = $site_url."/admin/module/".$moduleNameFind."/wedgeds/content/".$params[4]."/edit";
  $dataTable  = "widgeds";
  $deleteAble = true;
  $editAble = true;
  $rows = [
    "id" => "ID",
    "block_name" => "Block Type",
    "title" => "Block Title"
  ];
  $client_template_setup = get_settings("client_template");
  $where = "block_name='$block_name' AND theme_name='$client_template_setup'";
  include($admin_template."/module/view.php");
}

?>