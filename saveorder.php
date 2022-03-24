<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Confirm</title>
</head>

<body>
    <!--สร้างตัวแปรสำหรับบันทึกการสั่งซื้อ -->
    <?php
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $total_qty = $_SESSION['Product_Qty'];
    $total = $_SESSION['Product_totalprice'];
    $dttm = Date("Y-m-d G:i:s");
    //บันทึกการสั่งซื้อลงใน order_detail
    mysqli_query($conn, "BEGIN");
    $sql1    = "insert into order_head values(null, '$dttm', '$name', '$address', '$phone', '$total_qty', '$total', '1')";
    $query1    = mysqli_query($conn, $sql1);
    //ฟังก์ชั่น MAX() จะคืนค่าที่มากที่สุดในคอลัมน์ที่ระบุ ออกมา หรือจะพูดง่ายๆก็ว่า ใช้สำหรับหาค่าที่มากที่สุด นั่นเอง.
    $sql2 = "select max(Order_id) as Order_id from order_head where Order_name='$name' and Order_date='$dttm' ";
    $query2    = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_array($query2);
    $Order_id = $row["Order_id"];
    //PHP foreach() เป็นคำสั่งเพื่อนำข้อมูลออกมาจากตัวแปลที่เป็นประเภท array โดยสามารถเรียกค่าได้ทั้ง $key และ $value ของ array
    foreach ($_SESSION['cart'] as $Product_id => $qty) {
        $sql3    = "select * from product where Product_id='$Product_id'";
        $query3    = mysqli_query($conn, $sql3);
        $row3    = mysqli_fetch_array($query3);
        $total    = $row3['Product_price'] * $qty;

        $sql4    = "insert into order_detail values('$Order_id', '$Product_id', '$total_qty', '$total')";
        $query4    = mysqli_query($conn, $sql4);
    }

    if ($query1 && $query4) {
        mysqli_query($conn, "COMMIT");
        $msg = "บันทึกข้อมูลเรียบร้อยแล้ว ";
        foreach ($_SESSION['cart'] as $Product_id) {
            unset($_SESSION['cart'][$Product_id]);
            unset($_SESSION['cart']);
        }
    } else {
        mysqli_query($conn, "ROLLBACK");
        $msg = "บันทึกข้อมูลไม่สำเร็จ กรุณาติดต่อเจ้าหน้าที่ค่ะ ";
    }
    ?>
    <script type="text/javascript">
        alert("<?php echo $msg; ?>");
        window.location = 'shopping.php';
    </script>






</body>

</html>