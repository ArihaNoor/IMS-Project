<?php
 require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
 $db = new Database();
$id=$_GET['id'];
$tableName = "tblproduct";
$res=$db->Delete($tableName,"prodId = $id");
if($res){
    header('location: http://localhost/PHP/IMS%20Project/Products/frmDisplayAll.php');
}
?>