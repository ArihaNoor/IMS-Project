<!DOCTYPE html>
<?php 
require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$db = new Database();
$id = $_GET['id'];
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Supplier</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#updateSupplierModal').modal('show');
        });
    </script>
</head>

<body>
    <div class="row">
        <div id="updateSupplierModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="updateSupplier.php" method="post">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Supplier</h4>
                        </div>
                        <div class="modal-body">
                        <?php 
                            $query = "SELECT * FROM tblsupplier WHERE supplierId = $id";
                            $result = $db->sql($query);
                            foreach ($result as $row) {
                            ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?php echo $row['supplierId'] ?>" name="sId" required>
                            </div>
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" class="form-control" value="<?php echo $row['supplierName']; ?>" name="sname" required>
                            </div>
                            <div class="form-group">
                                <label>Supplier Company Name</label>
                                <input type="text" class="form-control"  value="<?php echo $row['supplierCompany']; ?>" name="scompany" required>
                            </div>
                            <div class="form-group">
                                <label>Supplier Phone</label>
                                <input type="tel" class="form-control" value="<?php echo $row['supplierPhone']; ?>" name="sphone" required>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" onclick="window.location.href='//localhost/PHP/IMS%20Project/Suppliers/frmDisplayAll.php'" value="Cancel">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>