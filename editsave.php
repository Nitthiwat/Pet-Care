<?php
    $conn = mysqli_connect('localhost', 'root', '', 'web/db');
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_detail = $_POST['product_detail'];
    $product_Qty = $_POST['product_Qty'];
    $product_img = $_POST['product_img'];
    $creatdAt = $_POST['createdAt'];
    $deletedAt = $_POST['product_price'];
    $upletedAt = $_POST['updatedAt'];

    $sql = "UPDATE product SET product_name = '$product_name',product_price = '$product_price',product_detail = '$product_detail' WHERE product_id = '$product_id'";
    mysqli_query($conn, $sql);
    echo "<script>alert('"."แก้ไขข้อมูลสำเร็จ"."')</script>";
    echo "<script>location.replace('index-product.php');</script>";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
