<?php 
require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$db = new Database();
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Category</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#updateCategoryModal').modal('show');
        });
    </script>
</head>

<body>
    <div class="row">
        <div id="updateCategoryModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="updateCategory.php" method="post">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Category</h4>
                        </div>
                        <div class="modal-body">
                            <?php 
                            $query = "SELECT * FROM tblcategory WHERE catId = $id";
                            $result = $db->sql($query);
                            foreach ($result as $row) {
                            ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?php echo $row['catId'] ?>" name="catId" required>
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" value="<?php echo $row['catName'] ?>" name="catName" required>
                            </div>
                            <div class="form-group">
                                <label>Category Brand</label>
                                <input type="text" class="form-control" value="<?php echo $row['catBrand'] ?>" name="catBrand" required>
                            </div>
                            <div class="form-group">
                                <label>No of Products</label>
                                <input type="number" class="form-control" value="<?php echo $row['productQty'] ?>" name="noOfProducts" required>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" onclick="window.location.href='//localhost/PHP/IMS%20Project/Categories/frmDisplayAll.php'" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>