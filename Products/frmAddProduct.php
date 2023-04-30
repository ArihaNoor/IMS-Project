<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#addProductModal').modal('show');
        });
    </script>
</head>

<body>
    <div class="row">
        <div id="addProductModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="addProduct.php" method="post">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Product</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="prodName" required>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-select-lg mb-3" aria-label="" name="prodCategory">
                                    <option selected>Select Product Category</option>
                                    <?php 
                                    require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
                                    $db = new Database();
                                    $query = "SELECT * FROM tblcategory";
                                    $result = $db->sql($query);
                                    foreach ($result as $row){
                                    ?>
                                    <option value="<?php echo $row['catId'] ?>"><?php echo $row['catName'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-select form-select-lg mb-3" aria-label="" name="prodSupplier">
                                    <option selected>Select Product Supplier</option>
                                    <?php 
                                    require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
                                    $db = new Database();
                                    $query = "SELECT * FROM tblsupplier";
                                    $result = $db->sql($query);
                                    foreach ($result as $row){
                                    ?>
                                    <option value="<?php echo $row['supplierId'] ?>"><?php echo $row['supplierName'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input type="number" class="form-control" name="prodQty" required>
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <input type="text" class="form-control" name="prodDesc" required>
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <input type="number" class="form-control" name="prodPrice" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" onclick="window.location.href='//localhost/PHP/IMS%20Project/Products/frmDisplayAll.php'" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-primary" value="Add" name="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>