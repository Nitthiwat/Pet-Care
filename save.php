<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "web/db";
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$sql = "INSERT INTO product (product_id, product_name, product_price, product_detail, product_Qty, product_img, createdAt, deletedAt, updatedAt) 
		VALUES ('".$_POST["product_id"]."','".$_POST["product_name"]."','".$_POST["product_price"]."'
		,'".$_POST["product_detail"]."','".$_POST["product_Qty"]."','".$_POST["product_img"]."','".$_POST["createdAt"]."','".$_POST["deletedAt"]."','".$_POST["updatedAt"]."')";

	$query = mysqli_query($conn,$sql);
	if($query) {
		echo "Record add successfully";
	}
	mysqli_close($conn);
    header('location:index-product.php');
?>
</body>
</html>
