<?php
 require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
 $db = new Database();
$id=$_GET['id'];
$tableName = "tblcategory";
$row="catId";
$res=$db->Delete($tableName,"catId = $id");
if($res){
    header('location: http://localhost/PHP/IMS%20Project/Categories/frmDisplayAll.php');
}
?>