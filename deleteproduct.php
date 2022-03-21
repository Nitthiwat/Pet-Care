<?php
	include('conn.php');
	$product_id=$_GET['Product_id'];
	mysqli_query($conn,"delete from product where Product_id='$product_id'");
	header('location:index-product.php');
?>