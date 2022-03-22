<div class="modal fade" id="shop<?php echo $_SESSION['Product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>ยืนยันการลบข้อมูลสินค้า</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="add_order.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">ชื่อสินค้า</label>
                        <input type="text" class="form-control" name="Product_name" value="<?php echo $row['Product_name']; ?>" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ที่อยู่การจัดส่ง</label>
                        <input type="text" class="form-control" name="Product_price" value="<?php echo $urow['User_address']; ?>" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ราคา</label>
                        <input type="text" class="form-control" name="Product_detail" value="<?php echo $row['Product_price']; ?>" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">จำนวน</label>
                        <input type="text" class="form-control" name="Product_Qty" value="<?php echo $qty; ?>" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ราคารวม</label>
                        <input type="text" class="form-control" name="Product_img" value="<?php echo $total_price; ?>" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-primary">สั่งซื้อ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>