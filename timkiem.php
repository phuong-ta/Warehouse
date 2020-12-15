<?php

$ketnoi = mysqli_connect ("localhost", "root", "", "test");
if (!$ketnoi) {
    die ("ko ket noi dc: " . mysqli_connect_error());
}

$a = $_POST ["Search"];

$bcd = "SELECT * FROM khohang
        WHERE product LIKE '$a' ;";


$tulos = mysqli_query ($ketnoi, $bcd);

$count = mysqli_num_rows ($tulos);

if ($count > 0) {
    echo "ket qua la $count";
}
else {
    echo "khong tim thay $a";
}

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>

        <table border="2">
            <thead>
                <th> Product's number</th>
                <th> Product</th>
                <th> Brand</th>
                <th> Color</th>
                <th> Size </th>
                <th> Price</th>
                <th> Quantity</th>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array ($tulos)) {
                    echo "<tr>". 
                    "<td>". $row[0]. "</td>". 
                    "<td>". $row[1]. "</td>".
                    "<td>". $row[2]. "</td>".
                    "<td>". $row[3]. "</td>".
                    "<td>". $row[4]. "</td>".
                    "<td>". $row[5]. "</td>".
                    "<td>". $row[6]. "</td>".
                    "</tr>"; }
                ?>
            </tbody>
            </table>

    </body>

</html>




