<?php 
require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$db = new Database();
$array = [
    'supplierName' => $_POST['sname'],
    'supplierCompany' => $_POST['scompany'],
    'supplierPhone' => $_POST['phone'],
];
$db->Insert('tblsupplier', $array);
header('location: http://localhost/PHP/IMS%20Project/Suppliers/frmDisplayAll.php');

?>