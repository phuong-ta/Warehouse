<!DOCTYPE html>
<html>
    <head></head>
    <body>

    <form action="xyz.php" method="POST" role="form">
        <input type="number" name="edit" >
        <input type="submit" value="Edit">
    </form>

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

    <?php

        $ketnoi = mysqli_connect ("localhost", "root", "", "test");
        if (!$ketnoi) {
            die ("ko ket noi dc: " . mysqli_connect_error());
        }

        $b = $_POST ["edit"];

        $bcd = "SELECT * FROM khohang
                WHERE number LIKE '$b' ;";


        $tulos = mysqli_query ($ketnoi, $bcd);

        $count = mysqli_num_rows ($tulos);

        if ($count > 0) {
            echo "ket qua la $count";
        }
        else {
            echo "khong tim thay $b";
        }

        $row = mysqli_fetch_array($tulos);

?>
        <form action="" method="" > 
        <tbody>
            <tr>
                <td> <?php echo $b;  ?></td>
                <td><input value='<?php echo $row[1]  ?>'> </td>
                <td><input value='<?php echo $row[2]  ?>'> </td>
                <td><input value='<?php echo $row[3]  ?>'> </td>
                <td><input value='<?php echo $row[4]  ?>'> </td>
                <td><input value='<?php echo $row[5]  ?>'> </td>
                <td><input value='<?php echo $row[6]  ?>'> </td>
            </tr>
        </tbody>

        <input type="submit" value="korjaa">
        </form>

    </body>
</html>