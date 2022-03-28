<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Checkout</title>
</head>

<body>
    <?php include('usermenu.php'); ?>
    <br>
    <form id="frmcart" name="frmcart" method="post" action="saveorder.php" enctype="multipart/form-data">
        <table width="70%" border="0" align="center" class="square">
            <tr style="background-color: #F9D5E3;text-align:center">
                <td>สินค้า</td>
                <td>ชื่อสินค้า</td>
                <td>ราคา</td>
                <td>จำนวน</td>
                <td>ราคารวม</td>
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
            }
            ?>
            <tr style="text-align: center;">
                <td width='220'><img src="<?php echo $row["Product_img"] ?>" alt="" style="width: 200px;"></td>
                <td width='334'><?php echo $row["Product_name"] ?></td>
                <td width='46'><?php echo $row["Product_price"] ?> บาท</td>
                <td width='57'> <?php echo $_SESSION['Product_Qty'] ?> </td>
                <td width='93'><?php echo $_SESSION['Product_totalprice']; ?></td>
            </tr>
            <tr style="background-color: #F9D5E3;height:50px">
                <td colspan='3' style="text-align: center;"><b>ราคารวม</b></td>
                <td style="text-align: right;"><b><?php echo $_SESSION['Product_totalprice']; ?></b> บาท</td>
                <td></td>
            </tr>
        </table>
        <p>
        <table border="0" cellspacing="0" align="center" width="50%">
            <tr>
                <td colspan="2" bgcolor="#CCCCCC">รายละเอียดในการติดต่อ</td>
            </tr>
            <tr>
                <td bgcolor="#EEEEEE">ชื่อ</td>
                <td><input name="name" type="text" id="name" value="<?php echo $urow['User_fname'] . ' ' . $urow['User_lname'] ?>" required></td>
            </tr>
            <tr>
                <td width="22%" bgcolor="#EEEEEE">ที่อยู่</td>
                <td width="78%">
                    <textarea name="address" cols="35" rows="5" id="address" required><?php echo $urow['User_address']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td bgcolor="#EEEEEE">เบอร์ติดต่อ</td>
                <td><input name="phone" type="text" id="phone" value="<?php echo $urow['User_phone']; ?>" required /></td>
            </tr>
            <tr>
                <td bgcolor="#EEEEEE">สลิปการโอนเงิน</td>
                <td><input type="file" name="slip"></td>
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