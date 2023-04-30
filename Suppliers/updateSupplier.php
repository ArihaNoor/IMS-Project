<?php
include('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$obj = new Database();

$param = [
    'supplierName' => $_POST['sname'],
    'supplierCompany' => $_POST['scompany'],
    'supplierPhone' => $_POST['sphone'],
];
$id = $_POST['sId'];
$obj->Update('tblsupplier', $param, "supplierId = $id");
header("Location: http://localhost/PHP/IMS%20Project/Suppliers/frmDisplayAll.php");
?>