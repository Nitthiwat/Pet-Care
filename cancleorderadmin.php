<?php
	include('conn.php');
	$order_id=$_GET['Order_id'];
	mysqli_query($conn,"UPDATE order_head SET Order_status = 3 where Order_id='$order_id'");
	header('location:index-order.php');
?>