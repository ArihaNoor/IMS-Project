<?php
include('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$obj = new Database();

$param = [
    'catName' => $_POST['catName'],
    'catBrand' => $_POST['catBrand'],
    'productQty' => $_POST['noOfProducts'],
];
$id = $_POST['catId'];
$obj->Update('tblcategory', $param, "catId = $id");
header("Location: http://localhost/PHP/IMS%20Project/Categories/frmDisplayAll.php");
?>