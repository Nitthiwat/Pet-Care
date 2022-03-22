<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid ps-5 pe-0 d-none d-lg-block" style="background-color:#502064; color: white;">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center ">
                    <small class="me-3 pe-3 border-end py-2">About me </small> <br>
                    <small class="py-2">Follow on us </small> <br>
                    <div class="icon-nav ps-2">
                        <small class="py-2"><i class="fa-brands fa-facebook"></i></small>
                        <small class="py-2"><i class="fa-brands fa-line"></i></small>
                        <small class="py-2"><i class="fa-brands fa-instagram"></i></small>
                    </div>
                </div>

            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center text-white top-shape px-5" style="background-color:#502064; color: white;">
                    <ul class="nav px-6 align-items-center ">
                        <li class="nav-item mx-2">
                            <?php
                            session_start();
                            require_once 'config/db.php';

                            if (isset($_SESSION['user_login'])) {
                                $user_id = $_SESSION['user_login'];
                                $stmt = $conn->query("SELECT * FROM users WHERE User_id = $user_id");
                                $stmt->execute();
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            }
                            ?>
                            <span>Welcome, <?php echo $row['User_fname'] . ' ' . $row['User_lname'] ?></span>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-4">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0 text-secondary"><i class="#"></i>Pet Care</h1>
        </a>
    </nav>
    <ul class="nav nav-tabs px-4" style="background-color: gray;">
        <li class="nav-item ">
            <a class="nav-link text-light" href="user.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#">About me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#">Product</a>
        </li>
    </ul>
</body>

</html>