<?php 

    session_start();
    require_once 'config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include('navbar_signup.php'); ?>
    <div class="container">
        <h3 class="mt-3">สมัครสมาชิก</h3>
        <hr>
        <form action="signup_db.php" method="post">
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

            <div class="mb-2">
                <label for="User_fname" class="form-label">First name</label>
                <input type="text" class="form-control" name="User_fname" aria-describedby="User_fname">
            </div>
            <div class="mb-2">
                <label for="User_lname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="User_lname" aria-describedby="User_lname">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="username">
            </div>
            <div class="mb-2">
                <label for="User_email" class="form-label">Email</label>
                <input type="email" class="form-control" name="User_email" aria-describedby="User_email">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-2">
                <label for="confirm password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="c_password">
            </div>
            <div class="mb-2">
                <label for="User_birthday" class="form-label">Your Birthday</label>
                <input type="date" class="form-control" name="User_birthday">
            </div>
            <div class="mb-2">
                <label for="User_phone" class="form-label">Your Phone Number</label>
                <input type="number" class="form-control" name="User_phone">
            </div>
            <div class="mb-2">
                <label for="User_address" class="form-label">Your Address</label>
                <input type="text" class="form-control" name="User_address">
            </div>
            <button type="submit" name="signup" class="btn" style="background-color:#502064; color: white;">Sign Up</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
    </div>
    
</body>
</html>