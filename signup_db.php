<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['signup'])) {
        $User_fname = $_POST['User_fname'];
        $User_lname = $_POST['User_lname'];
        $username = $_POST['username'];
        $User_email = $_POST['User_email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $User_birthday = $_POST['User_birthday'];
        $User_phone = $_POST['User_phone'];
        $User_address = $_POST['User_address'];
        $urole = 'user';

        if (empty($User_fname)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: signup.php");
        } else if (empty($User_lname)) {
            $_SESSION['error'] = 'กรุณากรอกนามสกุล';
            header("location: signup.php");
        } else if (empty($username)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อผู้ใช้';
            header("location: signup.php");
        } else if (empty($User_email)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: signup.php");
        } else if (!filter_var($User_email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: signup.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: signup.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: signup.php");
        } else if (empty($c_password)) {
            $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
            header("location: signup.php");
        } else if ($password != $c_password) {
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header("location: signup.php");
        }  else if (empty($User_birthday)) {
            $_SESSION['error'] = 'กรุณากรอกวัน/เดือน/ปีเกิด';
            header("location: signup.php");
        }else if (empty($User_phone)) {
            $_SESSION['error'] = 'กรุณากรอกเบอร์โทรศัพท์';
            header("location: signup.php");
        }else if (empty($User_address)) {
            $_SESSION['error'] = 'กรุณากรอกที่อยู่';
            header("location: signup.php");
        } else {
            try {

                $check_username = $conn->prepare("SELECT username FROM users WHERE username = :username");
                $check_username->bindParam(":username", $username);
                $check_username->execute();
                $row = $check_username->fetch(PDO::FETCH_ASSOC);

                if ($row['username'] == $username) {
                    $_SESSION['warning'] = "ชื่อผู้ใช้นี้มีอยู่ในระบบแล้ว <a href='signin.php'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: signup.php");
                } else if (!isset($_SESSION['error'])) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO users(User_fname, User_lname,username, User_email, password,User_birthday,User_phone,User_address, urole) 
                                            VALUES(:User_fname, :User_lname,:username, :User_email, :password,:User_birthday, :User_phone, :User_address, :urole)");
                    $stmt->bindParam(":User_fname", $User_fname);
                    $stmt->bindParam(":User_lname", $User_lname);
                    $stmt->bindParam(":username", $username);
                    $stmt->bindParam(":User_email", $User_email);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->bindParam(":User_birthday", $User_birthday);
                    $stmt->bindParam(":User_phone", $User_phone);
                    $stmt->bindParam(":User_address", $User_address);
                    $stmt->bindParam(":urole", $urole);
                    $stmt->execute();
                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว! <a href='signin.php' class='alert-link'>คลิ๊กที่นี่</a> เพื่อเข้าสู่ระบบ";
                    header("location: signup.php");
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: signup.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>