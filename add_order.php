<!-- Add New -->
<div class="modal fade" id="shop<?php echo $row['Product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-ce  nter" id="myModalLabel">เพิ่มข้อมูลสินค้า</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="save.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">รหัสสินค้า:</label>
							</div>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="Product_id">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ชื่อสินค้า:</label>
							</div>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="Product_name">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ราคาสินค้า:</label>
							</div>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="Product_price">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">รายละเอียดสินค้า:</label>
							</div>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="Product_detail">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">จำนวนสินค้าที่เหลือทั้งหมด:</label>
							</div>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="Product_Qty">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">รูปภาพ:</label>
							</div>
							<div class="col-lg-10">
								<input type="file" class="form-control" name="Product_img">
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ประเภทสินค้า:</label>
							</div>
							<div class="col-lg-10">
								<select class="form-control" id="PType_id">
									<?php
									include('conn.php');
									$query = mysqli_query($conn, "select * from producttype");
									while ($row = mysqli_fetch_array($query)) {
									?>
										<option value="<?php echo $row['PType_id']; ?>"><?php echo $row['PType_name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div style="height:10px;"></div>
						<div class="row">
							<div class="col-lg-2">
								<label class="control-label" style="position:relative; top:7px;">ประเภทสัตว์:</label>
							</div>
							<div class="col-lg-10">
								<select class="form-control" id="PetType_id">
									<?php
									include('conn.php');
									$query = mysqli_query($conn, "select * from pettype");
									while ($row = mysqli_fetch_array($query)) {
									?>
										<option value="<?php echo $row['PetType_id']; ?>"><?php echo $row['PetType_name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</div>
		</div>
	</div>
</div>