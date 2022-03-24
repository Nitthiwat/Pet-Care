<div class="modal fade" id="del<?php echo $row['Product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>ยืนยันการลบข้อมูลสินค้า</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <?php
        $del = mysqli_query($conn, "select * from product where Product_id='" . $row['Product_id'] . "'");
        $drow = mysqli_fetch_array($del);
        ?>
        <div class="container-fluid text-center">
          คุณต้องการยกเลิก : <strong><?php echo $drow['Product_name']; ?></strong> ใช่หรือไม่
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        <a href="deleteproduct.php?Product_id=<?php echo $row['Product_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
      </div>
    </div>
  </div>
</div>


<!-- แก้ไขสินค้า -->
<div class="modal fade" id="edit<?php echo $row['Product_id']; ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>แก้ไขข้อมูลสินค้า</b></h5>
      </div>
      <div class="modal-body">
        <?php
        $edit = mysqli_query($conn, "select * from product where Product_id='" . $row['Product_id'] . "'");
        $erow = mysqli_fetch_array($edit);
        ?>
        <form action="editsave.php?Product_id=<?php echo $erow['Product_id']; ?>" method="post">
          <div class="mb-3">
            <label class="form-label">รหัสสินค้า</label>
            <input type="text" class="form-control" name="Product_id" value="<?php echo $erow['Product_id']; ?>" readonly />
          </div>
          <div class="mb-3">
            <label class="form-label">ชื่อสินค้า</label>
            <input type="text" class="form-control" name="Product_name" value="<?php echo $erow['Product_name']; ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label">ราคา</label>
            <input type="text" class="form-control" name="Product_price" value="<?php echo $erow['Product_price']; ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label">รายละเอียด</label>
            <input type="text" class="form-control" name="Product_detail" value="<?php echo $erow['Product_detail']; ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label">สินค้าที่เหลือ</label>
            <input type="text" class="form-control" name="Product_Qty" value="<?php echo $erow['Product_Qty']; ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label">รูป</label>
            <input type="text" class="form-control" name="Product_img" value="<?php echo $erow['Product_img']; ?>" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>