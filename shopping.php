<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="fontawesome-free-6.0.0-web/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />

    <title>Pet Store</title>
    <style>
        .cut-text-multi {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            max-height: 3rem;
        }
    </style>
</head>

<body>
    <?php include('usermenu.php'); ?>
    <img src="./img/HeadShop.jpg" class="img-fluid w-100" alt="..." style="height: 60vh;">

    <div class="container">
        <nav id="navbar-shop" class="navbar navbar-light bg-light px-5 mb-3" style="height: 4rem;">
            <span class="navbar-brand" href="#">หมวดหมู่สินค้า</span>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyDog">สุนัข</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyCat">แมว</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyFish">ปลา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyBird">นก</a>
                </li>
            </ul>
        </nav>
        <form action="shopping.php" method="get" class="my-2 mx-5">
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
                $stmt = $conn->prepare("select * from product WHERE Product_name LIKE ?");
                $stmt->execute([$q]);
                $stmt->execute();
                $result = $stmt->fetchAll();
            }else{
                //    คิวรี่ข้อมูลมาแสดงตามปกติ *แสดงทั้งหมด
                  $stmt = $conn->prepare("select * from product");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                }
            ?>
        <div data-bs-spy="scroll" data-bs-target="#navbar-shop" data-bs-offset="0" class="scrollspy-example px-5" tabindex="0">
            <div class="my-4">
                <h5 id="scrollspyDog">หมวดหมู่สุนัข</h5>
                <div class="item-more row row-cols-1 row-cols-md-4 g-3 mx-3">
                    <?php
                    include('conn.php');
                    foreach($result as $row) {
                        if ($row['Product_Qty'] > 0 && $row['PetType_id'] == 'PT001') {
                    ?>
                            <div class="col" style="height:auto;">
                                <div class="card h-100">
                                    <a href="./buy.php?Product_id=<?php echo $row['Product_id']; ?>" class="card-img-top text-center"><img src="<?php echo $row['Product_img']; ?>" alt="..." style="width: 70%;"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="overflow:hidden;text-overflow: ellipsis;height:3rem"><?php echo $row['Product_name']; ?></h5>
                                        <div class="card-text fs-6 opacity-75 cut-text-multi"><?php echo $row['Product_detail']; ?></div>
                                        <div class="card-text text-end">฿<?php echo $row['Product_price']; ?></div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="my-4">
                <h5 id="scrollspyCat">หมวดหมู่แมว</h5>
                <div class="item-more row row-cols-1 row-cols-md-4 g-3 mx-3">
                    <?php
                    include('conn.php');
                    foreach($result as $row) {
                        if ($row['Product_Qty'] > 0 && $row['PetType_id'] == 'PT002') {
                    ?>
                            <div class="col" style="height:auto;">
                                <div class="card h-100">
                                    <a href="./buy.php?Product_id=<?php echo $row['Product_id']; ?>" class="card-img-top text-center"><img src="<?php echo $row['Product_img']; ?>" alt="..." style="width: 70%;"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="overflow:hidden;text-overflow: ellipsis;height:3rem"><?php echo $row['Product_name']; ?></h5>
                                        <div class="card-text fs-6 opacity-75 cut-text-multi"><?php echo $row['Product_detail']; ?></div>
                                        <div class="card-text text-end">฿<?php echo $row['Product_price']; ?></div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="my-4">
                <h5 id="scrollspyFish">หมวดหมู่ปลา</h5>
                <div class="item-more row row-cols-1 row-cols-md-4 g-3 mx-3">
                    <?php
                    include('conn.php');
                    foreach($result as $row) {
                        if ($row['Product_Qty'] > 0 && $row['PetType_id'] == 'PT003') {
                    ?>
                            <div class="col" style="height:auto;">
                                <div class="card h-100">
                                    <a href="./buy.php?Product_id=<?php echo $row['Product_id']; ?>" class="card-img-top text-center"><img src="<?php echo $row['Product_img']; ?>" alt="..." style="width: 70%;"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="overflow:hidden;text-overflow: ellipsis;height:3rem"><?php echo $row['Product_name']; ?></h5>
                                        <div class="card-text fs-6 opacity-75 cut-text-multi"><?php echo $row['Product_detail']; ?></div>
                                        <div class="card-text text-end">฿<?php echo $row['Product_price']; ?></div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="my-4">
                <h5 id="scrollspyBird">หมวดหมู่นก</h5>
                <div class="item-more row row-cols-1 row-cols-md-4 g-3 mx-3">
                    <?php
                    include('conn.php');
                    foreach($result as $row) {
                        if ($row['Product_Qty'] > 0 && $row['PetType_id'] == 'PT004') {
                    ?>
                            <div class="col" style="height:auto;">
                                <div class="card h-100">
                                    <a href="./buy.php?Product_id=<?php echo $row['Product_id']; ?>" class="card-img-top text-center"><img src="<?php echo $row['Product_img']; ?>" alt="..." style="width: 70%;"></a>
                                    <div class="card-body">
                                        <h5 class="card-title" style="overflow:hidden;text-overflow: ellipsis;height:3rem"><?php echo $row['Product_name']; ?></h5>
                                        <div class="card-text fs-6 opacity-75 cut-text-multi"><?php echo $row['Product_detail']; ?></div>
                                        <div class="card-text text-end">฿<?php echo $row['Product_price']; ?></div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>