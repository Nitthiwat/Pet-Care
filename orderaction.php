<div class="modal fade" id="shop<?php echo $row['Product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Delete</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
                $del = mysqli_query($conn, "select * from room where User_id='" . $row['Product_id'] . "'");
                $drow = mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h5>
                        <center>roomname: <strong><?php echo $drow['roomname']; ?></strong></center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="deleteroom.php?roomid=<?php echo $row['roomid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </div>
        </div>
    </div>
</div>