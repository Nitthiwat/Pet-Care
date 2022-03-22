<?php
    include('conn.php');
    $qty = $_POST['quantity'];
    $pd_id = $_GET['Product_id'];
    $query = mysqli_query($conn, "select * from product where Product_id ='".$pd_id."'");
    $row = mysqli_fetch_array($query);
    echo $qty.$row['Product_price'].$user_id;
?>