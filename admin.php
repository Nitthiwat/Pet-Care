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
            <form action="admin.php" method="get" class="my-2">
                <div class="mb-3 row">
                    <!-- d-none d-sm-block คือซ่อนเมื่ออยู่หน้าจอโทรศัพท์ -->
                    <label class="col-2 col-sm-1 col-form-label d-none d-sm-block">ค้นหาสินค้า</label>
                    <div class="col-7 col-sm-5">
                        <input type="text" name="q" required class="form-control" placeholder="ระบุสินค้าที่ต้องการค้นหา" value="<?php if (isset($_GET['q'])) {
                                                                                                                                            echo $_GET['q'];
                                                                                                                                        } ?>">
                    </div>
                    <div class="col-2 col-sm-1">
                        <button type="submit" class="btn btn-primary">ค้นหา</button>
                    </div>
                </div>
            </form>
            <?php
            //แสดงข้อความที่ค้นหา
            //สร้างเงื่อนไขตรวจสอบถ้ามีการค้นหาให้แสดงเฉพาะรายการค้นหา
            if (isset($_GET['q']) && $_GET['q'] != '') {

                //ประกาศตัวแปรรับค่าจากฟอร์ม
                $q = "%{$_GET['q']}%";

                //คิวรี่ข้อมูลมาแสดงจากการค้นหา
                $stmt = $conn->prepare("select * from order_detail join order_head on(order_detail.Order_id = order_head.Order_id) join product on(order_detail.Product_id = product.Product_id) where Product_name LIKE ? order by Order_date DESC");
                $stmt->execute([$q]);
                $stmt->execute();
                $result = $stmt->fetchAll();
            } else {
                //    คิวรี่ข้อมูลมาแสดงตามปกติ *แสดงทั้งหมด
                $stmt = $conn->prepare("select * from order_detail join order_head on(order_detail.Order_id = order_head.Order_id) join product on(order_detail.Product_id = product.Product_id) order by Order_date DESC");
                $stmt->execute();
                $result = $stmt->fetchAll();
            }
            ?>
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
                    foreach($result as $row) {
                    ?>
                        <tr></tr>
                        <td><?php echo $row['Order_id']; ?></td>
                        <td><?php echo $row['Product_name']; ?></td>
                        <td><?php echo $row['detail_qty']; ?></td>
                        <td><?php echo $row['Product_price']*$row['detail_qty']; ?> บาท</td>
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