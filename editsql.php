<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (isset($_POST["abcd"])) {

    if (empty ($_POST["number"] and $_POST["Product"] and $_POST["Brand"] and $_POST["Size"] and $_POST["Color"] and $_POST["Price"] and $_POST["Quantity"] )) {
        echo " Please fill all Product' detail";
    }else {
    
    
        $number= $_POST ["number"];
        $product = $_POST ["Product"];
        $brand = $_POST ["Brand"];
        $size = $_POST ["Size"];
        $color = $_POST ["Color"];
        $price = $_POST ["Price"];
        $quantity = $_POST ["Quantity"];

        $sqli = "  UPDATE khohang SET Product= '$product', Brand= '$brand', Size ='$size',Color='$color',Price='$price',Quantity='$quantity'  WHERE id =$number";

        $tulos = mysqli_query ($conn, $sqli);

        if ($tulos) {
            header ("Location: Admin.php");
        } else {
            echo '<script>alert("Please check number of product")</script>';
            
        }
    }
}
?>