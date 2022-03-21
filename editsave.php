<?php
    include('conn.php');
    $Product_id = $_GET['Product_id'];

    $Product_name = $_POST['Product_name'];
    $Product_price = $_POST['Product_price'];
    $Product_detail = $_POST['Product_detail'];
    $Product_Qty = $_POST['Product_Qty'];
    $Product_img = $_POST['Product_img'];

    mysqli_query($conn,"update product set Product_name='$Product_name', Product_price='$Product_price', Product_detail='$Product_detail', Product_Qty='$Product_Qty', Product_img='$Product_img' where Product_id='$Product_id'");
	header('location:index-product.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
