<?php
if (!$DBTable->check_db_exist("site_setup")) {
    include_once("database.php");
    echo "installing....!!<br>";
    echo "unpacking....!!<br>";
    install_dbtbl_setup();
    echo "DONE :} ";
    exit;
}
?>

<?php
include_once("template/header.php");
$parem_name = isset($params[2]) ? $params[2] : "";
switch ($parem_name) {
    case 'themes':
        include_once("themes.php");
        break;
    case "pages":
        include_once("pages.php");
        break;
    case "menus":
        include_once("menus.php");
        break;
    case "wedgeds":
        include_once("wedgeds.php");
        break;
    default:
        include_once("themes.php");
        break;
}

?>