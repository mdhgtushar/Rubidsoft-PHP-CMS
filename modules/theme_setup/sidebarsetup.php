<?php


$moduleName = $_GET['moduleName'];
if(isset($_GET['add'])){
    $rows = [
      ["title", "text", "Title"],
      ["body", "text", "Body"]
    ];
    if(isset($_POST['addNew'])){
      sql_array_insert_data("site_setup", $rows);
    }
    
    include($admin_template."/module/insert.php");
  }
?>

<a class="w3-button w3-block w3-teal" href="?moduleName=<?php echo $moduleName; ?>&sidebarsetup&add">ADD New Data</a>
<br>
<?php 
$datas = sql_select_data("site_setup", "title='sidebar'");
if(is_array($datas)){ ?>
<table class="w3-table-all">
    <thead>
      <tr class="w3-teal">
        <th> id</th>
        <th> Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php foreach($datas as $post){ ?>
    <tr>
         
      <td><?php echo $post['id'];?></td>
      <td><?php echo $post['body'];?></td>
         
      <td>
        <?php if($deleteAble){
          if(isset($_GET['deleteId'])){
            $id = $_GET['deleteId'];
            sql_delete_data($dataTable, "id='$id'");
        }
          ?>
        <a class="w3-btn w3-padding-small w3-red" href="?moduleName=<?php echo $moduleName; ?>&deleteId=<?php echo $post['id'];?>">Delete</a> 
        <?php }?>
        <?php if($editAble){?>
        <a class="w3-btn w3-padding-small w3-teal" href="#">Edit</a>
        <?php }?>
      </td>
    </tr>
    <?php }?>
  </table>
  <?php  }else{echo "no data found";}?>