<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>เพิ่มลบข้อมูลสินค้า</title>

</head>

<body>

    <!-- <div>
  <img src="img/meeting.png" class="center-block img-fluid" alt="Responsive image">
</div> --> -->

    <div class="container">
        <div style="height:50px;"></div>
        <div class="well" style="margin:auto; padding:auto; width:80%;">
            <span style="font-size:25px; color:blue">
                <center><strong>เพิ่มข้อมูลสินค้า</strong></center>
            </span>
            <a href="add.php">Add product</a>
            <div style="height:50px;"></div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคาสินค้า</th>
                    <th>รายละเอียดสินค้า</th>
                    <th>จำนวนสินค้าคงเหลือ</th>
                    <th>รูปภาพของสินค้า</th>

                    <th>วันที่บันทึก</th>
				<th>วันที่ลบ</th>
				<th>วันที่แก้ไข</th>
                </thead>
                <tbody>
                    <?php
				include('connect.php');
				$query=mysqli_query($conn,"select * from product ");
				while($row=mysqli_fetch_array($query)){
					?>
                    <tr>
                        <td><?php echo $row['product_id']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['product_price']; ?></td>
                        <td><?php echo $row['product_detail']; ?></td>
                        <td><?php echo $row['product_Qty']; ?></td>
                        <td><?php echo $row['product_img']; ?></td>
                        <td><?php echo $row['createdAt']; ?></td>
						<td><?php echo $row['deletedAt']; ?></td>
						<td><?php echo $row['updatedAt']; ?></td>

                   <td> <a href="editform.php">Edit</a> ||
                    <a href="#del<?php echo $row['product_id']; ?>" data-toggle="modal" class="btn btn-danger"><span
                            class="glyphicon glyphicon-trash"></span> Delete</a>
                   </td>
                    </tr>
                    <?php
				}
			
			?>
                    </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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