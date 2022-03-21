<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row col-md-6 col-md-offset-3">
			<div class="panel-heading text-center">
				
			</div><br>
			<div class="panel-body">
      <form action="save.php" name="frmAdd" method="post">
      <h2>เพิ่มข้อมูลสินค้า</h2>
					<div class="form-group">
						<label for="product_id">รหัสสินค้า</label>
						<input type="text" class="form-control" name="product_id" />
					</div>
					<div class="form-group">
						<label for="product_name">ชื่อสินค้า</label>
						<input type="text" class="form-control" name="product_name" />
					</div>
					<div class="form-group">
						<label for="product_price">ราคาสินค้า</label>
						<input type="text" class="form-control" name="product_price" />
					</div>
					<div class="form-group">
						<label for="product_detail">รายละเอียดสินค้า</label>
						<input type="text" class="form-control" name="product_detail" />
					</div>
					<div class="form-group">
						<label for="product_Qty">จำนวนสินค้าที่เหลือทั้งหมด</label>
						<input type="text" class="form-control" name="product_Qty" />
					</div>
					<div class="form-group">
						<label for="product_img">รูปภาพของสินค้า</label>
						<input type="text" class="form-control"  name="product_img" />
					</div>
					<div class="form-group">
						<label for="product_img">วันที่บันทึก</label>
						<input type="text" class="form-control"  name="createdAt" />
					</div>
					<div class="form-group">
						<label for="product_img">วันที่ลบ</label>
						<input type="text" class="form-control"  name="deletedAt" />
					</div>
					<div class="form-group">
						<label for="product_img">วันที่แก้ไข</label>
						<input type="text" class="form-control"  name="uodatedAt" />
					</div>
					
					<div class="modal-footer text-center">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> ยืนยัน</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
                    
				</form>
				</form>
			</div>	
		</div>
	</div>
</body>
</html>