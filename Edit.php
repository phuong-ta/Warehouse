<?php

$con = mysqli_connect("localhost", "root", "", "test");
$id = $_GET["id"];

$sql=" SELECT * FROM `khohang` WHERE id = $id ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="uts-8">
        <meta name="viewport" content="width=device-width, initial-scale =1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>

    <hr>
            <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card">
            <header class="card-header">
                <a href="Admin.php" class="float-right btn btn-outline-primary mt-1">Overview</a>
                <h4 class="card-title mt-2">Add new Product</h4>
            </header>
            <article class="card-body">

    <form method="POST" action=" editsql.php">

            <div class="form-group">
                <label>Product number *</label>
                <input type="text" name="number" class="form-control" value="<?php echo $row [0];  ?>" >
            </div>

            <div class="form-group">
                <label>Product  *</label>
                <input type="text" name="Product" class="form-control" value="<?php echo $row [1];  ?>">
            </div>

            <div class="form-group">
                <label>Brand *</label>
                <input type="text" name="Brand" class="form-control" value="<?php echo $row [2];  ?>">
            </div>

            <div class="form-group">
                <label>Size*</label>
                <input type="text" name="Size" class="form-control" value="<?php echo $row [3];  ?>">
            </div>

            <div class="form-group">
                <label>Color *</label>
                <input type="text" name="Color" class="form-control" value="<?php echo $row [4];  ?>">
            </div>

            <div class="form-group">
                <label>Price *</label>
                <input type="text" name="Price" class="form-control" value="<?php echo $row [5];  ?>">
            </div>

            <div class="form-group">
                <label>Quantity *</label>
                <input type="text" name="Quantity" class="form-control" value="<?php echo $row [6];  ?>">
            </div>

            <div class="form-group">
                <button type="submit" name="abcd" class="btn btn-primary btn-block"> Save  </button>
            </div>   
        </form>
        </article>

        </form>
    </body>
</html>
