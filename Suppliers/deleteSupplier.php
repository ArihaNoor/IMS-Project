<?php
 require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
 $db = new Database();
$id=$_GET['id'];
$tableName = "tblSupplier";
$res=$db->Delete($tableName,"supplierId = $id");
if($res){
    header('location: http://localhost/PHP/IMS%20Project/Suppliers/frmDisplayAll.php');
}
?>