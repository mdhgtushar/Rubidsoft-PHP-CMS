<br>
<?php


$moduleName = "menu";


if(isset($params[3]) && $params[3] == "add"){
    $rows = [
        ["menu_id" , "select", "Menu Id"],
        ["name" , "text", "Name"],
        ["link" ,  "text", "Link"],
        ["target_" , "select",  "Target"],
        ["status" , "select", "Status"],
      ];
  if(isset($_POST['addNew'])){
    sql_array_insert_data("menus", $rows);
  }
  
  include($admin_template."/module/insert.php");
}elseif(isset($params[3]) && $params[3] == "edit"){
  
  $listUrl = $common_page->site_url."/admin/module/".$moduleNameFind."/menus";
  $dataTable = "menus";
  $editId = $params[4];
  $data = sql_select_data_first($dataTable, "id='$editId'");
  $rows = [
    ["menu_id" , "select", "Menu Id"],
    ["name" , "text", "Name"],
    ["link" ,  "text", "Link"],
    ["target_" , "select",  "Target"],
    ["status" , "select", "Status"],
  ];
    if(isset($_POST['update'])){
      sql_array_update_data($dataTable, $rows, "id=$editId");
    }
include($admin_template."/module/edit.php");
}else{
  $addUrl = $common_page->site_url."/admin/module/".$moduleNameFind."/menus/add";
  $editUrl = $common_page->site_url."/admin/module/".$moduleNameFind."/menus/edit";
  $dataTable  = "menus";
  $deleteAble = true;
  $editAble = true;

  $rows = [
    "id" => "ID",
    "menu_id" => "Menu Id",
    "name" => "Name",
    "link" => "Link",
    "order_" => "Order",
    "target_" => "Target",
    "status" => "Status"
  ];
  include($init->admin_template."/module/view.php");
}