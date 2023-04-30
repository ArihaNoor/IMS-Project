
<?php
include_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$obj = new Database();

$param = [
    'prodName' => $_POST['prodName'],
    'prodCatId' => $_POST['prodCategory'],
    'prodSupId' => $_POST['prodSupplier'],
    'prodQty' => $_POST['prodQty'],
    'prodDescription' => $_POST['prodDescription'],
    'prodUnitPrice' => $_POST['prodUnitPrice']
];
$id = $_POST['prodId'];

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$obj->Update('tblproduct', $param, "prodId = $id");
header("Location: http://localhost/PHP/IMS%20Project/Products/frmDisplayAll.php");
?>