<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suppliers Display</title>
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

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#addSupplierModal').modal('show');
        });
    </script>

</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Display <b>Suppliers</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <a href="frmAddSupplier.php" class="btn btn-success"><i class="material-icons">&#xE147;</i>
                                <span>Add Supplier</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>Supplier Company</th>
                            <th>Supplier Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
                            $db = new Database();
                            $query = "SELECT * FROM tblsupplier";
                            $result = $db->sql($query);
                            foreach ($result as $row) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $row['supplierId'] ?>
                                </td>
                                <td>
                                    <?php echo $row['supplierName'] ?>
                                </td>
                                <td>
                                    <?php echo $row['supplierCompany'] ?>
                                </td>
                                <td>
                                    <?php echo $row['supplierPhone'] ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success"><a
                                            href='frmUpdateSupplier.php?id=<?php echo $row['supplierId']; ?>'
                                            style="color: white; text-decoration: none;">Edit</a></button>
                                    <button type="button" class="btn btn-danger"><a
                                            href='deleteSupplier.php?id=<?php echo $row['supplierId']; ?>'
                                            style="color: white; text-decoration: none;">Delete</a></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class=" text-center">
                    <a href="http://localhost/PHP/IMS%20Project/ControlPanel/sidePanel.php"
                        class="btn btn-primary btn-lg" role="button"><i class="fa fa-hand-o-left"></i> Go Back To
                        Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>