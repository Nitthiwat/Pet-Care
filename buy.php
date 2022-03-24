<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Pet Store</title>
</head>

<body>
    <?php include('usermenu.php'); ?>

    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-out">
            <?php
            include('conn.php');
            $id = $_GET['Product_id'];
            $query = mysqli_query($conn, "select * from product where Product_id='" . $id . "'");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="row my-2 py-5 d-flex justify-content-center" style="background-color: #502064;margin:0 7rem">
                    <div class="col-md-6 order-first order-md-first d-flex align-items-center justify-content-center">
                        <div class="img mx-100" style="width: 400px;">
                            <img src="<?php echo $row['Product_img']; ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-5 px-2 content d-flex flex-column justify-content-center order-last order-md-last" style="color: white;">
                        <h3><?php echo $row['Product_name']; ?></h3>
                        <p class="opacity-75"><?php echo $row['Product_detail']; ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>ราคา: <?php echo $row['Product_price']; ?> บาท</h5>
                            <form action="add_order.php?Product_id=<?php echo $id; ?>" method="post" class="d-flex g-2">
                                <input type="number" class="form-control mx-1" name="quantity" style="width: 80px;">
                                <button type="submit" class="btn btn-primary mx-1">ซื้อสินค้า</button>
                                <span class="pull-left"><a href="/shopping.php" data-toggle="modal" class="btn btn-primary">ตะกร้าสินค้า</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>

</html>