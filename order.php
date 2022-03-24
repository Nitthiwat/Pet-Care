<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php include('usermenu.php'); ?>

    <div class="container my-5">
        <div class="well">
            <span class="my-5 " style="font-size:25px; color:blue">
                <center><strong>รายละเอียดการสั่งซื้อ</strong></center>
            </span>
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
                    include('conn.php');
                    $qty = $_POST['quantity'];
                    $pd_id = $_SESSION['Product_id'];
                    $query = mysqli_query($conn, "select * from product where Product_id ='" . $pd_id . "'");
                    $row = mysqli_fetch_array($query); {
                        $total_price = $row['Product_price'] * $qty;
                    ?>
                        <tr>
                            <td class="text-center"><img src="<?php echo $row['Product_img']; ?>" alt="..." style="width: 250px;"></td>
                            <td style="width: 350px;"><?php echo $row['Product_name']; ?></td>
                            <td style="width: 250px;">
                                <?php
                                $user_query = mysqli_query($conn, "select * from users where User_id ='" . $user_id . "'");
                                $urow = mysqli_fetch_array($user_query);
                                echo $urow['User_address'];
                                ?>
                            </td>
                            <td><?php echo $row['Product_price']; ?> บาท</td>
                            <td><?php echo $qty; ?></td>
                            <td><?php echo $total_price; ?> บาท</td>
                            <td>
                                <span class="pull-left"><a href="#shop" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>สั่งซื้อ</a></span>
                                <?php include('shop.php'); ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
</body>

</html>