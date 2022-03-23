<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>การสั่งซื้อสินค้า</title>

</head>

<body>
    <?php include('adminmenu.php'); ?>
    <div class="container my-5">
        <div class="well">
            <span class="my-5" style="font-size:25px; color:blue">
                <center><strong>รายละเอียดการสั่งซื้อสินค้า</strong></center>
            </span>
            <!-- <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span> -->
            <!-- <a href="add.php">Add product</a> -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>รหัสการสั่งซื้อ</th>
                    <th>สินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคารวม</th>
                    <th>วันที่สั่งซื้อสินค้า</th>
                    <th>ที่อยู่การจัดส่ง</th>
                    <th>สถานะ</th>
                    <th>รูปสลิปการโอนเงิน</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    include('conn.php');
                    $sql = "select * from order_detail join order on(order_detail.Order_id = order.Order_id) join product on(order_detail.Product_id = product.Product_id)";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr></tr>
                            <td><?php echo $row['Order_id']; ?></td>
                            <td><?php echo $row['Product_name']; ?></td>
                            <td><?php echo $row['Order_Qty']; ?></td>
                            <td><?php echo $row['Order_sumprice']; ?></td>
                            <td><?php echo $row['Order_date']; ?></td>
                            <td><?php echo $row['Order_address']; ?></td>
                            <td><?php echo $row['Order_status']; ?></td>
                            <td></td>
                            <td>
                                <a href="#edit<?php echo $row['Product_id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> ||
                                <a href="#del<?php echo $row['Product_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                <?php include('productaction.php'); ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>