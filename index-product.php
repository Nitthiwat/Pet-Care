<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Pet Store</title>

</head>

<body>
    <?php include('adminmenu.php'); ?>
    <div class="container my-5">
        <div class="well">
            <span class="my-5" style="font-size:25px; color:blue">
                <center><strong>รายละเอียดข้อมูลสินค้า</strong></center>
            </span>
            <form action="index-product.php" method="get" class="my-2">
                <div class="mb-3 row">
                    <!-- d-none d-sm-block คือซ่อนเมื่ออยู่หน้าจอโทรศัพท์ -->
                    <label class="col-2 col-sm-1 col-form-label d-none d-sm-block">ค้นหาสินค้า</label>
                    <div class="col-7 col-sm-5">
                        <input type="text" name="q" required class="form-control" placeholder="ระบุชื่อสินค้าที่ต้องการค้นหา" value="<?php if (isset($_GET['q'])) {
                                                                                                                                            echo $_GET['q'];
                                                                                                                                        } ?>">
                    </div>
                    <div class="col-2 col-sm-1">
                        <button type="submit" class="btn btn-primary">ค้นหา</button>
                    </div>
                </div>
            </form>
            <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคาสินค้า</th>
                    <th>รายละเอียดสินค้า</th>
                    <th>จำนวนสินค้าคงเหลือ</th>
                    <th>รูปภาพของสินค้า</th>
                    <th>ชนิดสินค้า</th>
                    <th>ชนิดสัตว์</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    include('conn.php');
                    $sql = "select * from product join producttype on(product.PType_id = producttype.PType_id) join pettype on(product.PetType_id = pettype.PetType_id)";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $row['Product_id']; ?></td>
                            <td><?php echo $row['Product_name']; ?></td>
                            <td><?php echo $row['Product_price']; ?></td>
                            <td><?php echo $row['Product_detail']; ?></td>
                            <td><?php echo $row['Product_Qty']; ?></td>
                            <td><a href="<?php echo $row['Product_img']; ?>"><img src="<?php echo $row['Product_img']; ?>" alt="" style="width: 150px;"></a></td>
                            <td><?php echo $row['PType_name']; ?></td>
                            <td><?php echo $row['PetType_name']; ?></td>
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
        <?php include('add.php'); ?>
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