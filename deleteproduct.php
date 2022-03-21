<?php
	$conn = mysqli_connect('localhost', 'root', '', 'web/db');
    $sql = "SELECT * FROM product ";
	$product_id=$_GET['product_id'];
	mysqli_query($conn,"DELETE from product where product_id='$product_id'");
	
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>