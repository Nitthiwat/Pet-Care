<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'web/db');
        $sql = "SELECT * FROM product WHERE product_id";
        $rs = mysqli_query($conn, $sql);

    ?>
    <h1>ฟอร์มแก้ไขข้อมูล</h1>
    <form action="./editsave.php" method="post">
        <?php
        foreach($rs as $pro){
            echo "รหัสสินค้า :<input type='text' name='product_id' value='".$pro['product_id']."' readonly><br>";
            echo "ชื่อสินค้า :<input type='text' name='product_name' value='".$pro['product_name']."' style='width:300px'><br>";
            echo "ราคาสินค้า :<input type='number' name='product_price' value='".$pro['product_price']."' style='width:300px'><br>";
            echo "รายละเอียดสินค้า :<input type='number' name='product_detail' value='".$pro['product_detail']."' style='width:300px'><br>";
            echo "จำนวนสินค้าที่เหลือทั้งหมด :<input type='number' name='product_Qty' value='".$pro['product_Qty']."' style='width:300px'><br>";
            echo "รูปภาพสินค้า :<input type='number' name='product_img' value='".$pro['product_img']."' style='width:300px'><br>";

        }
        ?>
        <br> 
        <button type="submit">submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html> 