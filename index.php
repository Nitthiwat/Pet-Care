<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
  <title>Pet Store</title>
  <style>
    .content img {
      float: left;
      margin-right: 2em;
    }

    .info p {
      width: 85%;
      padding: left 2em;

    }

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
  <title>Document</title>
</head>

<body>

  <?php include('navbar.php'); ?>
  <?php include('imgslide.php'); ?>
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
                <a href="./signin.php" class="card-img-top text-center"><img src="<?php echo $row['Product_img']; ?>" alt="..." style="width: 70%;"></a>
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
  <?php include('knowledge.php'); ?>
  <?php include('about_me.php'); ?>
  <?php include('footer.php'); ?>


</body>

</html>