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


        <div class="container">
            <hr>
            <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card">
            <header class="card-header">
                <a href="Admin.php" class="float-right btn btn-outline-primary mt-1">Overview</a>
                <h4 class="card-title mt-2">Add new Product</h4>
            </header>
            <article class="card-body">
   
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

            <div class="form-group">
                <label>Product number *</label>
                <input type="text" name="number" class="form-control" placeholder="Scan code of product" min="8">
            </div>

            <div class="form-group">
                <label>Product *</label>
                <input type="text" name="Product" class="form-control" placeholder="Product">
            </div>

            <div class="form-group">
                <label>Brand *</label>
                <input type="text" name="Brand" class="form-control" placeholder="Brand">
            </div>
            
            <div class="form-group">
                <label>Size *</label>
                <input type="text" name="Size" class="form-control" placeholder="Size" >
            </div>

            <div class="form-group">
                <label>Color *</label>
                <input type="text" name="Color" class="form-control" placeholder="Color">
            </div> 
            <small class="text-muted">Nhập email bạn thường xuyên sử dụng.</small>

            <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="text" name="Price" placeholder="Price">
            </div> 

            <div class="form-group">
                <label>Quantity</label>
                <input class="form-control" type="number" name="Quantity" placeholder="Quantity">
            </div> 

            <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary btn-block"> Save  </button>
            </div> <!-- form-group// -->   
        </form>
        </article> <!-- card-body end .// -->

        </form>
    
    </body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (isset($_GET["save"])) {

    if (empty ($_GET["number"] and $_GET["Product"] and $_GET["Brand"] and $_GET["Size"] and $_GET["Color"] and $_GET["Price"] and $_GET["Quantity"] )) {
        echo " Please fill all Product' detail";
    }else {
    
    
        $a = $_GET ["number"];
        $b = $_GET ["Product"];
        $c = $_GET ["Brand"];
        $d = $_GET ["Size"];
        $e = $_GET ["Color"];
        $f = $_GET ["Price"];
        $g = $_GET ["Quantity"];

        $sql = "INSERT INTO khohang (Number, Product, Brand, Size, Color, Price, Quantity)
                VALUE ('$a', '$b', '$c', '$d', '$e', '$f', '$g')";

        $res = mysqli_query ($conn, $sql);

        if ($res) {
            echo '<script>alert("New Product added")</script>'; 
            echo "";
        } else {
            echo '<script>alert("Please check again")</script>';
        }
    }
}
?>