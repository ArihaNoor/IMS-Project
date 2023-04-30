
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Dashboard</title>
</head>

<body>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <div class="container my-5">
    <h1 class="mb-4 my-5">Dashboard</h1>
    <?php
    require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
    $db = new Database();
    ?>
    <div class="row">
      <div class="col-md-3">
        <div class="card-counter primary">
          <i class="fa fa-code-fork"></i>
          <span class="count-numbers">
            <?php
            $result = $db->countRows('tblproduct');
            echo $result;
            ?>
          </span>
          <span class="count-name">
            <h3>Products</h3>
          </span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter danger">
          <i class="fa fa-ticket"></i>
          <span class="count-numbers">
            <?php
            $result = $db->countRows('tblcategory');
            echo $result;
            ?>
          </span>
          <span class="count-name">
            <h3>Categories</h3>
          </span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter success">
          <i class="fa fa-database"></i>
          <span class="count-numbers">
            <?php
            $result = $db->countRows('tblsupplier');
            echo $result;
            ?>
          </span>
          <span class="count-name">
            <h3>Suppliers</h3>
          </span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter info">
          <i class="fa fa-users"></i>
          <span class="count-numbers">
            <?php
            $result = $db->countRows('admin');
            echo $result;
            ?>
          </span>
          <span class="count-name">
            <h3>Users</h3>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>