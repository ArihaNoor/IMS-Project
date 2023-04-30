<?php
require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$db = new Database();
$prodId = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Update Product</h2>
        <form action="updateProduct.php" method="post">
            <?php
            $query = "SELECT * FROM tblproduct WHERE prodId = '$prodId'";
            $result = $db->sql($query);
            foreach ($result as $row) {
                ?>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="prodId" name="prodId" value="<?php echo $row['prodId'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="prodName" name="prodName" value="<?php echo $row['prodName'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Product Category:</label>
                    <input type="text" class="form-control" id="prodCategory" name="prodCategory" value="<?php echo $row['prodCatId'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Product Supplier:</label>
                    <input type="text" class="form-control" id="prodSupplier" name="prodSupplier" value="<?php echo $row['prodSupId'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="phone">Product Quantity:</label>
                    <input type="number" class="form-control" id="prodQty" value="<?php echo $row['prodQty'] ?>" name="prodQty">
                </div>
                <div class="form-group">
                    <label for="phone">Product Description:</label>
                    <input type="text" class="form-control" id="prodDesc" value="<?php echo $row['prodDescription'] ?>" name="prodDescription">
                </div>
                <div class="form-group">
                    <label for="phone">Product Unitprice:</label>
                    <input type="text" class="form-control" id="price" value="<?php echo $row['prodUnitPrice'] ?>" name="prodUnitPrice">
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-default btn-primary">Update</button>
    </div>
    </form>
    </div>
</body>

</html>