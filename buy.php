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
            $_SESSION['Product_id'] = $id;

            $query = mysqli_query($conn, "select * from product where Product_id='" . $id . "'");
            $query1 = mysqli_query($conn, "select Product_Qty from product where Product_id='" . $id . "'");
            $row1    = mysqli_fetch_array($query1);
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="row my-2 py-5 d-flex justify-content-center" style="background-color: #502064;margin:0 7rem">
                    <div class="col-md-6 order-first order-md-first d-flex align-items-center justify-content-center">
                        <div class="img mx-100" style="width: 400px;">
                            <img src="<?php echo $row['Product_img']; ?>" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-md-5 px-2 content d-flex flex-column justify-content-center order-last order-md-last" style="color: white;">
                        <h3><?php echo $row['Product_name']; ?></h3>
                        <p class="opacity-75"><?php echo $row['Product_detail']; ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>ราคา: <?php echo $row['Product_price']; ?> บาท</h5>
                            <form action="cart.php?Product_id=<?php echo $_SESSION['Product_id'] ?>&act=add" method="post" class="d-flex">
                                <input type="number" class="form-control mx-1" name="quantity" value="1" min="1" max="<?php echo $row1['Product_Qty']; ?>" style="width: 80px;">
                                <button type="submit" class="btn btn-primary mx-1">ซื้อสินค้า</button> 
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