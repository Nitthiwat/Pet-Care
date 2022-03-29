<div class="modal fade" id="cancle<?php echo $row['Order_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>ยืนยันการชำระเงิน</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <?php
                $del = mysqli_query($conn, "select * from product where Product_id='" . $row['Product_id'] . "'");
                $drow = mysqli_fetch_array($del);
                ?>
                <div class="container-fluid text-center">
                    คุณต้องการยกเลิกคำสั่งซื้อ : <strong><?php echo $drow['Product_name']; ?></strong> ใช่หรือไม่
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="cancleorderadmin.php?Order_id=<?php echo $row['Order_id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-trash"></span> Confirm</a>
            </div>
        </div>
    </div>
</div>