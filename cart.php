<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shopping Cart</title>
    <style>
        .square {
            width: 70%;
            border-collapse: collapse;

        }

        .head td {
            background-color: #766092;
            padding: 1.5em;
            text-align: center;
            color: white;
        }

        h2 {
            text-align: center;
            padding-top: 2em;
            padding-bottom: 1em;
        }

        .hr {
            border: 1px solid #ECECEC;
            width: 90%;
            margin-left: 5%;
            margin-right: 10%;
        }

        .botton {
            background-color: green;
        }
    </style>
</head>

<body>
    <?php include('usermenu.php');
    $Product_id = $_GET['Product_id'];
    $act = $_GET['act'];

    if ($act == 'add' && !empty($Product_id)) {
        if (isset($_SESSION['cart'][$Product_id])) {
            $_SESSION['cart'][$Product_id];
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
    <br>
    <form id="frmcart" name="frmcart" method="post" action="?Product_id=<?php echo $Product_id ?>&act=update">
        <table width="600" border="0" align="center" class="square">
            <tr class="head">
                <td>สินค้า</td>
                <td>ชื่อสินค้า</td>
                <td>ราคา</td>
                <td>จำนวน</td>
                <td>รวม(บาท)</td>
            </tr>
            <?php
            $total = 0;
            $quantity = $_POST['quantity'];
            if (!empty($_SESSION['cart'])) {
                include("conn.php");
                foreach ($_SESSION['cart'] as $Product_id => $qty) {
                    $sql = "select * from product where Product_id='$Product_id'";
                    $query = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($query);
                    $sum = $row['Product_price'] * $quantity;
                    $total += $sum;
                }
            ?>
                <tr style="text-align: center;">
                    <td width='220'><img src="<?php echo $row["Product_img"] ?>" alt="" style="width: 200px;"></td>
                    <td width='334'><?php echo $row["Product_name"] ?></td>
                    <td width='46'><?php echo $row["Product_price"] ?> บาท</td>
                    <td width='57'>
                        <input type='text' name='amount[$Product_id]' value='<?php echo $quantity ?>' size='2' />
                    </td>
                    <td width='93'><?php echo $sum; ?></td>
                </tr>
                <tr style="background-color: #F9D5E3;height:50px">
                    <td colspan='3' style="text-align: center;"><b>ราคารวม</b></td>
                    <td style="text-align: right;"><b><?php echo $total; ?></b> บาท</td>
                    <td></td>
                </tr>
            <?php
                $_SESSION['Product_Qty'] = $qty;
                $_SESSION['Product_totalprice'] = $total;
            }
            ?>
            <tr>
                <td colspan="5" style="text-align:right">
                    <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" style="background-color:#A1BD57; border-radius:5px; padding:0.5em; width:10%; border:1px solid #A1BD57;">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>