<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Checkout</title>
</head>

<body>
    <?php include('usermenu.php'); ?>
    <br>
    <form id="frmcart" name="frmcart" method="post" action="saveorder.php">
        <table width="600" border="0" align="center" class="square">
            <tr>
                <td width="1558" colspan="4" bgcolor="#FFDDBB">
                    <strong>สั่งซื้อสินค้า</strong>
                </td>
            </tr>
            <tr>
                <td bgcolor="#F9D5E3">สินค้า</td>
                <td align="center" bgcolor="#F9D5E3">ราคา</td>
                <td align="center" bgcolor="#F9D5E3">จำนวน</td>
                <td align="center" bgcolor="#F9D5E3">รวม/รายการ</td>
            </tr>
            <?php
            include('conn.php');
            $total = 0;
            foreach ($_SESSION['cart'] as $Product_id => $qty) {
                $sql    = "select * from product where Product_id='$Product_id'";
                $sql2    = "select * from users where User_id='$user_id'";
                $query    = mysqli_query($conn, $sql);
                $query2    = mysqli_query($conn, $sql2);
                $row    = mysqli_fetch_array($query);
                $urow    = mysqli_fetch_array($query2);
                $sum    = $row['Product_price'] * $qty;
                $total    += $sum;
                echo "<tr>";
                echo "<td>" . $row["Product_name"] . "</td>";
                echo "<td align='right'>" . number_format($row['Product_price'], 2) . "</td>";
                echo "<td align='right'>$qty</td>";
                echo "<td align='right'>" . number_format($sum, 2) . "</td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td  align='right' colspan='3' bgcolor='#F9D5E3'><b>รวม</b></td>";
            echo "<td align='right' bgcolor='#F9D5E3'>" . "<b>" . number_format($total, 2) . "</b>" . "</td>";
            echo "</tr>";


            ?>
        </table>
        <p>
        <table border="0" cellspacing="0" align="center">
            <tr>
                <td colspan="2" bgcolor="#CCCCCC">รายละเอียดในการติดต่อ</td>
            </tr>
            <tr>
                <td bgcolor="#EEEEEE">ชื่อ</td>
                <td><input name="name" type="text" id="name" value="<?php echo $urow['User_fname'].' '.$urow['User_lname']?>" required ></td>
            </tr>
            <tr>
                <td width="22%" bgcolor="#EEEEEE">ที่อยู่</td>
                <td width="78%">
                    <textarea name="address" cols="35" rows="5" id="address" required><?php echo $urow['User_address'];?></textarea>
                </td>
            </tr>
            <tr>
                <td bgcolor="#EEEEEE">เบอร์ติดต่อ</td>
                <td><input name="phone" type="text" id="phone" value="<?php echo $urow['User_phone'];?>" required /></td>
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor="#CCCCCC">
                    <input type="submit" name="Submit2" value="สั่งซื้อ" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>