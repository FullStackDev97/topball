<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./image/TOP BALL-modified.png">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="exterior/css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="exterior/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="exterior/css/style.css" />
    <link rel="stylesheet" type="text/css" href="exterior/css/responsive.css" />
    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="./public/bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ab4d4b7304.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
</head>

<body>
    <?php include "menu.php"; ?>
    <?php echo $content; ?>
    <?php include "footer.php"; ?>

    <!-- JS bootstrap -->
    <script src="./public/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="exterior/js/jquery.min.js"></script>
    <script type="text/javascript" src="exterior/js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="exterior/js/main.js"></script>
</body>

</html>