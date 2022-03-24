<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <title>Pet Store</title>
</head>
<body>
<?php include('usermenu.php'); ?>
    
    <h1 style="text-align: center; margin-top:2%;color:#502064;">Profile</h1>
    
        <div class="container" style=" margin-top: 3%;padding-left:25%;">
            <div class="form-group " >
                    <div class="row">
                        <label for="User_fname" class="col-sm-1.5 ">Firstname</label>
                        <div class="col-sm-8">
                        <input type="text" name="User_fname" class="form-control text-secondary" style="background-color:white; "  value="<?php echo $row['User_fname'] ?>" readonly> <br>
                        </div>
                    </div>
            </div>
            <div class="form-group " >
                    <div class="row" >
                        <label for="User_fname" class="col-sm-1.5 ">Last Name</label>
                        <div class="col-sm-8">
                        <input type="text" name="User_lname" class="form-control text-secondary" style="background-color:white; " value="<?php echo $row['User_lname'] ?>" readonly> <br>
                        </div>
                    </div>
            </div>
            <div class="form-group " >
                    <div class="row">
                        <label for="username" class="col-sm-1.5 ">Username</label>
                        <div class="col-sm-8">
                        <input type="text" name="username" class="form-control text-secondary" style="background-color:white; " value="<?php echo $row['username'] ?>" readonly> <br>
                        </div>
                    </div>
            </div>
            <div class="form-group " >
                    <div class="row">
                        <label for="User_email" class="col-sm-1.5">Email</label>
                        <div class="col-sm-8">
                        <input type="text" name="User_email" class="form-control text-secondary" style="background-color:white; " value="<?php echo $row['User_email'] ?>" readonly> <br>
                        </div>
                    </div>
            </div>
            <div class="form-group " >
                    <div class="row">
                        <label for="User_birthday" class="col-sm-1.5">Your Birthday</label>
                        <div class="col-sm-8">
                        <input type="text" name="User_birthday" class="form-control text-secondary" style="background-color:white; " value="<?php echo $row['User_birthday'] ?>" readonly> <br>
                        </div>
                    </div>
            </div>
            <div class="form-group " >
                    <div class="row">
                        <label for="User_phone" class="col-sm-1.5">Your Phone Number</label>
                        <div class="col-sm-8">
                        <input type="text" name="User_phone" class="form-control text-secondary" style="background-color:white; " value="<?php echo $row['User_phone'] ?>" readonly> <br>
                        </div>
                    </div>
            </div>
            <div class="form-group " >
                    <div class="row">
                        <label for="User_address" class="col-sm-1.5">Your Address</label>
                        <div class="col-sm-8">
                        <input type="text" name="User_phone" class="form-control text-secondary" style="background-color:white; " value="<?php echo $row['User_address'] ?>" readonly> <br>
                        </div>
                    </div>
            </div>
            </div>
            <div class="form-group text-center" style=" margin-top: 2%;">
        <td><a href="editprofile.php?update_id=<?php echo $row["User_id"]; ?>" class="btn btn-secondary">Edit</a></td>   
        <td><a href="user.php" class="btn " style="background-color:#502064; color: white;">Finish</a></td>   
        </div> 

    <?php include('footer.php'); ?>
    
    
   
    
        
</body>
</html>