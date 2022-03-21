<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="/js/loadmore.js"></script>
    <title>Shopping</title>
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
        <div data-bs-spy="scroll" data-bs-target="#navbar-shop" data-bs-offset="0" class="scrollspy-example px-5" tabindex="0">
            <div class="my-4">
                <h5 id="scrollspyDog">หมวดหมู่สุนัข</h5>
                <div class="item-more row row-cols-1 row-cols-md-4 g-3 mx-3">
                    <?php
                    include('conn.php');
                    $query = mysqli_query($conn, "select * from product where PetType_id ='PT001'");
                    while ($row = mysqli_fetch_array($query)) {
                        if($row['Product_Qty']>0){
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
                <button type="button" class="btn btn-secondary loadmore">Secondary</button>
            </div>
            <div class="my-4">
                <h5 id="scrollspyCat">หมวดหมู่แมว</h5>
                <div class="row row-cols-1 row-cols-md-4 g-3 mx-3">
                    <?php
                    include('conn.php');
                    $query = mysqli_query($conn, "select * from product where PetType_id ='PT002'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col" style="height:auto;">
                            <div class="card h-100">
                                <img src="<?php echo $row['Product_img']; ?>" class="card-img-top mx-auto" alt="..." style="width: 70%;">
                                <div class="card-body">
                                    <h5 class="card-title" style="overflow:hidden;text-overflow: ellipsis;height:3rem"><?php echo $row['Product_name']; ?></h5>
                                    <div class="card-text fs-6 opacity-75 cut-text-multi"><?php echo $row['Product_detail']; ?></div>
                                    <div class="card-text text-end">฿<?php echo $row['Product_price']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="my-4">
                <h5 id="scrollspyFish">หมวดหมู่ปลา</h5>
                <div class="row row-cols-1 row-cols-md-4 g-3 mx-3">
                    <?php
                    include('conn.php');
                    $query = mysqli_query($conn, "select * from product where PetType_id ='PT003'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col" style="height:auto;">
                            <div class="card h-100">
                                <img src="<?php echo $row['Product_img']; ?>" class="card-img-top mx-auto" alt="..." style="width: 70%;">
                                <div class="card-body">
                                    <h5 class="card-title" style="overflow:hidden;text-overflow: ellipsis;height:3rem"><?php echo $row['Product_name']; ?></h5>
                                    <div class="card-text fs-6 opacity-75 cut-text-multi"><?php echo $row['Product_detail']; ?></div>
                                    <div class="card-text text-end">฿<?php echo $row['Product_price']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="my-4">
                <h5 id="scrollspyBird">หมวดหมู่นก</h5>
                <div class="row row-cols-1 row-cols-md-4 g-3 mx-3">
                    <?php
                    include('conn.php');
                    $query = mysqli_query($conn, "select * from product where PetType_id ='PT004'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col" style="height:auto;">
                            <div class="card h-100">
                                <img src="<?php echo $row['Product_img']; ?>" class="card-img-top mx-auto" alt="..." style="width: 70%;">
                                <div class="card-body">
                                    <h5 class="card-title" style="overflow:hidden;text-overflow: ellipsis;height:3rem"><?php echo $row['Product_name']; ?></h5>
                                    <div class="card-text fs-6 opacity-75 cut-text-multi"><?php echo $row['Product_detail']; ?></div>
                                    <div class="card-text text-end">฿<?php echo $row['Product_price']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>