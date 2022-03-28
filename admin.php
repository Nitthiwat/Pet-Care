<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include('adminmenu.php'); ?>
    <div class="container my-5">
        <div class="well">
            <span class="my-5" style="font-size:25px; color:blue">
                <center><strong>ประวัติการสั่งซื้อสินค้า</strong></center>
            </span>
            <!-- <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span> -->
            <!-- <a href="add.php">Add product</a> -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>รหัส</th>
                    <th style="width: 250px;">สินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคารวม</th>
                    <th>วันที่สั่งซื้อสินค้า</th>
                    <th style="width: 300px;">ที่อยู่การจัดส่ง</th>
                    <th>สถานะ</th>
                    <th>รูปสลิปการโอนเงิน</th>
                </thead>
                <tbody>
                    <?php
                    include('conn.php');
                    $sql = "select * from order_detail join order_head on(order_detail.Order_id = order_head.Order_id) join product on(order_detail.Product_id = product.Product_id) order by Order_date DESC";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr></tr>
                        <td><?php echo $row['Order_id']; ?></td>
                        <td><?php echo $row['Product_name']; ?></td>
                        <td><?php echo $row['detail_qty']; ?></td>
                        <td><?php echo $row['detail_sumprice']; ?> บาท</td>
                        <td><?php echo $row['Order_date']; ?></td>
                        <td><?php echo $row['Order_address']; ?></td>
                        <td>
                            <?php $status = $row['Order_status'];
                            switch ($status) {
                                case "1":
                                    echo "รอการชำระเงิน";
                                    break;
                                case "2":
                                    echo "ชำระเงินแล้ว";
                                    break;
                                case "3":
                                    echo "ยกเลิกคำสั่งซื้อ";
                                    break;
                            }
                            ?>
                        </td>
                        <td><a href="<?php echo $row['Order_img']; ?>"><img src="<?php echo $row['Order_img']; ?>" alt="" style="width:200px"></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>