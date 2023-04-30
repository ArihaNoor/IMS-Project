<?php 
require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$db = new Database();
$array = [
    'catName' => $_POST['catname'],
    'catBrand' => $_POST['catbrand'],
    'productQty' => $_POST['noOfProducts'],
];
$db->Insert('tblcategory', $array);
header('location: http://localhost/PHP/IMS%20Project/Categories/frmDisplayAll.php');
?>