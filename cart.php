<?php
$Product_id = $_GET['Product_id'];
$act = $_GET['act'];

if ($act == 'add' && !empty($Product_id)) {
    if (isset($_SESSION['cart'][$Product_id])) {
        $_SESSION['cart'][$Product_id]++;
    } else {
        $_SESSION['cart'][$Product_id] = 1;
    }
}

if ($act == 'remove' && !empty($Product_id))  //ยกเลิกการสั่งซื้อ
{
    unset($_SESSION['cart'][$Product_id]);
}

if ($act == 'update') {
    $amount_array = $_POST['amount'];
    foreach ($amount_array as $Product_id => $amount) {
        $_SESSION['cart'][$Product_id] = $amount;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php include('usermenu.php'); ?>

    <div class="container my-5">
        <div class="well">
            <span class="my-5 " style="font-size:25px; color:blue">
                <center><strong>ตะกร้าสินค้า</strong></center>
            </span>
            <!-- <a href="add.php">Add product</a> -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>สินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>ที่อยู่การจัดส่ง</th>
                    <th>ราคาสินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคารวม</th>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    if (!empty($_SESSION['cart'])) {
                        include("conn.php");
                        foreach ($_SESSION['cart'] as $Product_id => $qty) {
                            $sql = "select * from product where Product_id='$Product_id'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($query);
                            $sum = $row['Product_price'] * $qty;
                            $total += $sum;
                            echo "<tr>";
                            echo "<td width='334'>" . $row["Product_name"] . "</td>";
                            echo "<td width='46' align='right'>" . number_format($row["Product_price"], 2) . "</td>";
                            echo "<td width='57' align='right'>";
                            echo "<input type='text' name='amount[$Product_id]' value='$qty' size='2'/></td>";
                            echo "<td width='93' align='right'>" . number_format($sum, 2) . "</td>";
                            //remove product
                            echo "<td width='46' align='center'><a href='cart.php?Product_id=$Product_id&act=remove'>ลบ</a></td>";
                            echo "</tr>";
                        }
                        echo "<tr>";
                        echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
                        echo "<td align='right' bgcolor='#CEE7FF'>" . "<b>" . number_format($total, 2) . "</b>" . "</td>";
                        echo "<td align='left' bgcolor='#CEE7FF'></td>";
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                        <td><a href="product.php">กลับหน้ารายการสินค้า</a></td>
                        <td colspan="4" align="right">
                            <input type="submit" name="button" id="button" value="ปรับปรุง" />
                            <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>

</html>