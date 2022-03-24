<?php 
    require_once('connection.php');

    if (isset($_REQUEST['update_id'])) {
        try {
            $User_id = $_REQUEST['update_id'];
            $select_stmt = $db->prepare("SELECT * FROM users WHERE User_id = :User_id");
            $select_stmt->bindParam(':User_id', $User_id);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }

    if (isset($_REQUEST['btn_update'])) {
        $User_fname_up = $_REQUEST['txt_User_fname'];
        $User_lname_up = $_REQUEST['txt_User_lname'];
        $User_email_up = $_REQUEST['txt_User_email'];

        if (empty($User_fname_up)) {
            $errorMsg = "Please Enter Fisrtname";
        } else if (empty($User_lname_up)) {
            $errorMsg = "Please Enter Lastname";
        }else if (empty($User_email_up)) {
            $errorMsg = "Please Enter Lastname";
        } else {
            try {
                if (!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE users SET User_fname = :fname_up, User_lname = :lname_up, User_email = :email_up WHERE User_id = :User_id");
                    $update_stmt->bindParam(':fname_up', $User_fname_up);
                    $update_stmt->bindParam(':lname_up', $User_lname_up);
                    $update_stmt->bindParam(':email_up', $User_email_up);
                    $update_stmt->bindParam(':User_id', $User_id);

                    if ($update_stmt->execute()) {
                        $updateMsg = "Record update successfully...";
                        header("refresh:2;userprofile.php");
                    }
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <?php include('usermenu.php'); ?>
    <div class="container">
    <h1 style="text-align: center; margin-top:2%;color:#502064;">Edit Profile</h1>
    

    <?php 
         if (isset($errorMsg)) {
    ?>
        <div class="alert alert-danger">
            <strong>Wrong! <?php echo $errorMsg; ?></strong>
        </div>
    <?php } ?>
    

    <?php 
         if (isset($updateMsg)) {
    ?>
        <div class="alert alert-success">
            <strong>Success! <?php echo $updateMsg; ?></strong>
        </div>
    <?php } ?>

    <form method="post" class="form-horizontal mt-5" style=" padding-left:25%;">
            
            <div class="form-group ">
                <div class="row">
                    <label for="User_fname" class="col-sm-1.5">Fisrtname</label>
                    <div class="col-sm-8">
                        <input type="text" name="txt_User_fname" class="form-control" value="<?php echo $User_fname; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row" style="margin-top:2%;">
                    <label for="User_lname" class="col-sm-1.5">Lastname</label>
                    <div class="col-sm-8">
                        <input type="text" name="txt_User_lname" class="form-control" value="<?php echo $User_lname; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row" style="margin-top:2%;">
                    <label for="User_email" class="col-sm-1.5">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="txt_User_email" class="form-control" value="<?php echo $User_email; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row" style="margin-top:2%;">
                    <label for="User_birthday" class="col-sm-1.5">Your Birthday</label>
                    <div class="col-sm-8">
                        <input type="date" name="txt_User_birthday" class="form-control" value="<?php echo $User_birthday; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row" style="margin-top:2%;">
                    <label for="User_phone" class="col-sm-1.5">Your Phone Number</label>
                    <div class="col-sm-8">
                        <input type="text" name="txt_User_phone" class="form-control" value="<?php echo $User_phone; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row" style="margin-top:2%;">
                    <label for="User_address" class="col-sm-1.5">Your Address</label>
                    <div class="col-sm-8">
                        <input type="text" name="txt_User_address" class="form-control" value="<?php echo $User_address; ?>">
                    </div>
                </div>
            </div>
           
           
            
                <div  style="padding-top: 3%;padding-left:25%">
                    <input type="submit" name="btn_update" style="background-color:#502064; color: white;" class="btn btn-success" value="Update">
                    <a href="userprofile.php" class="btn btn-danger">Cancel</a>
                </div>
                </form>
            
    </div>

            <?php include('footer.php'); ?>
   

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>