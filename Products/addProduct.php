
<?php
if(isset($_POST['Add'])){
    require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
    $db = new Database();
    $products = [
        'prodName' => $_POST['prodName'],
        'prodCatId' => $_POST['prodCategory'],
        'prodSupId' => $_POST['prodSupplier'],
        'prodQty' => $_POST['prodQty'],
        'prodDescription' => $_POST['prodDesc'],
        'prodUnitPrice' => $_POST['prodPrice'],
        
    ];
    $db->Insert('tblproduct', $products);
    header('location: http://localhost/PHP/IMS%20Project/Products/frmDisplayAll.php');
} 



// INSERT INTO tblproduct ( `prodName`,`prodCatId`,`prodSupId`,`prodQty`,`prodDescription`,`prodUnitPrice`) VALUES ('Lays ','17','6','76','Snackers + Masala Flavor','34')

?>