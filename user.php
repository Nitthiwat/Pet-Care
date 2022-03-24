<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/fontawesome.min.css">
    <link href="fontawesome-free-6.0.0-web/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />

    <style>
        .content img {
            float: left;
            margin-right: 2em;
        }

        .info p {
            width: 85%;
            padding: left 2em;
        }

        .cut-text-multi {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            max-height: 3rem;
        }

        .my-4 h2 {
            margin-bottom: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include('usermenu.php'); ?>
    <?php include('imgslide.php'); ?>
    <?php include('content.php'); ?>
    <?php include('knowledge.php'); ?>
    <?php include('about_me.php'); ?>
    <?php include('footer.php'); ?>
</body>

</html>