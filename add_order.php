<?php
    include('conn.php');

    $qty = $_POST['quantity'];
    $pd_id = $_GET['Product_id'];
    $query = mysqli_query($conn, "select * from product where Product_id ='".$pd_id."'");
    $row = mysqli_fetch_array($query);
    $uquery = mysqli_query($conn, "select * from users where User_id ='".$user_id."'");
    $urow = mysqli_fetch_array($uquery);
    $price = $row['Product_price'];
    $address = $urow['User_address'];
    $total = $qty * $price;
    $status = 0;
    $now = time();

    mysqli_query($conn,"insert into order (Order_date, Order_totalprice, Order_address, Order_status)
	 values ('$now', '$total', '$address', '$status')");


?>