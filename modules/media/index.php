
<br>
<?php
if(!check_db_exist("media")){
    include_once("database.php");
    echo "installing....!!<br>";
    echo "unpacking....!!<br>";
    install_dbtbl_setup();
    echo "DONE :} ";
    exit;
}
$datas = sql_select_data("media");
include("uploadMedia.php");
echo "<br><hr>";
include("mediaList.php");



?>
