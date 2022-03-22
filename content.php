<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="loadmore.js"></script>
  <style>
    .cut-text-multi {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      max-height: 3rem;
    }

    .my-4 h2 {
      margin-bottom: 2em;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container my-5">
    <div class="my-4">
      <h2>รายการสินค้า</h2>
      <div class="row row-cols-1 row-cols-md-4 g-3 mx-3">
        <?php
        include('conn.php');
        $query = mysqli_query($conn, "select * from product");
        while ($row = mysqli_fetch_array($query)) {
          if ($row['Product_Qty'] > 0) {
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
    <div class="d-grid gap-2 col-6 mx-auto text-center">
      <a href="shopping.php"><button class="btn" style="background-color:#502064; color: white;width:15rem" type="button">สินค้าเพิ่มเติม</button></a>
    </div>
  </div>
</body>

</html>