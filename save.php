<?php
    include('conn.php');
    $Product_id = $_POST["Product_id"];
    $Product_name = $_POST["Product_name"];
    $Product_price = $_POST["Product_price"];
    $Product_detail = $_POST["Product_detail"];
    $Product_qty = $_POST["Product_Qty"];
    $pd = $_POST["PType_id"];
    $pt = $_POST["PetType_id"];

    $file = $_FILES['Product_img'];
    $filename = $_FILES["Product_img"]["name"];
    $filTmpname = $_FILES["Product_img"]["tmp_name"];
    $fileExt = explode(".", $filename);
    $fileAcExt = strtolower(end($fileExt));
    $newFilename = time() . "." . $fileAcExt;
    if($pt == "PT001"){
        $filelocation = 'img/ShopDog/' . $filename;
    }else if($pt == "PT002"){
        $filelocation = 'img/ShopCat/' . $filename;
    }else if($pt == "PT003"){
        $filelocation = 'img/ShopFish/' . $filename;
    }else if($pt == "PT004"){
        $filelocation = 'img/ShopBird/' . $filename;
    }
    move_uploaded_file($filTmpname, $filelocation);
    $pdfilelocation = $filelocation;


    $pd_query = mysqli_query($conn,"SELECT * FROM producttype WHERE PType_id='$pd'");
    while ($pd_row = mysqli_fetch_array($pd_query))
    $pd_type = $pd_row['PType_id'];
    $pt_query = mysqli_query($conn,"SELECT * FROM pettype WHERE PetType_id='$pt'");
    while ($pt_row = mysqli_fetch_array($pt_query))
    $pt_type = $pt_row['PetType_id'];
    mysqli_query($conn, "insert into product (Product_id, Product_name, Product_price, Product_detail, Product_Qty, Product_img, PType_id, PetType_id) 
	values ('$Product_id', '$Product_name', '$Product_price', '$Product_detail', '$Product_qty', '$pdfilelocation', '$pd_type', '$pt_type')");
    header('location:index-product.php');
?>