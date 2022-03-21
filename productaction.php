<?php
$connect = new mysqli('localhost', 'root', '', 'web/db');

if ($connect->connect_error) {
  die("Something wrong.: " . $connect->connect_error);
}

$sql = "SELECT * FROM product";
$result = $connect->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เพิมลบสินค้า</title>
  <!-- <link rel="stylesheet" href="sale.css"> -->

  <!--bootstarp css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  
</head>

<body>
    <?php include('add.php') ?>
                    <!-- แก้ไขสินค้า -->
                    <div class="modal fade" id="edit_modal<?php echo $row['product_id']; ?>" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">


                        <form class="modal-content" method="post" action="editsave.php">
                          <div class="modal-header">
                            <h5 class="modal-title"><b>แก้ไขข้อมูลสินค้า</b></h5>
                          </div>
                          <div class="modal-body">

                        
                            <div class="mb-3">
                              <label class="form-label">รหัสสินค้า</label>
                              <input type="text" class="form-control" name="product_id" value="<?php echo $row['product_id']; ?>" readonly />
                            </div>


                            <div class="mb-3">
                              <label class="form-label">ชื่อสินค้า</label>
                              <input type="text" class="form-control" name="product_name" value="<?php echo $row['product_name']; ?>" />
                            </div>

                            <div class="mb-3">
                              <label class="form-label">ราคา</label>
                              <input type="text" class="form-control" name="product_price" value="<?php echo $row['product_price']; ?>" />
                            </div>


                            <div class="mb-3">
                              <label class="form-label">รายละเอียด</label>
                              <input type="text" class="form-control" name="product_detail" value="<?php echo $row['product_detail']; ?>" />
                            </div>


                            <div class="mb-3">
                              <label class="form-label">ที่เหลือ</label>
                              <input type="text" class="form-control" name="product_Qty" value="<?php echo $row['product_Qty']; ?>" />
                            </div>



                            <div class="mb-3">
                              <label class="form-label">รูป</label>
                              <input type="text" class="form-control" name="product_img" value="<?php echo $row['product_img']; ?>" />
                            </div>


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                          </div>


                        </form>
                      </div>


                    </div>


                    <!--ปุ่มลบ--->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#del<?php echo $row['product_id']; ?>">ลบ</button>
                    <div class="modal fade" id="del<?php echo $row['product_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>ยืนยันการลบข้อมูลสินค้า</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            คุณต้องการยกเลิก <?php echo $row['product_name']; ?> ใช่หรือไม่
                          </div>
                          <div class="modal-footer">
                            <?php
                            $id = $row['product_id'];

                            ?>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='delete.php?id=<?php echo $id; ?>'">ยืนยัน</button>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>
                </td>

              </tr>

      </div>





    <?php endwhile ?>

    </tbody>

    </table>

    </div>





  </div>
  <!----------------------------------->



  </div>

  

  <!---------------------------------------------------------------------------------------------------->

  <!--bootstarp java-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>