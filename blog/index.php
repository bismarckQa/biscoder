<?php 
require '../conec/conexion.php';
require '../asset/menuBar.php';
require '../asset/startHome.php';
require '../asset/boxsBlog.php';
require '../asset/footer.php';
require '../asset/matrix.php';
require '../asset/scripts.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <title>Blog</title>
    <!-- Meta Tags -->
     <meta name="Description" content="Biscoder">
        <meta name="distribution" content="global">
        <meta name="Robots" content="index, follow, all">
        <meta name="googlebot" content="index, follow, all">
        <meta name="google" content="traslate">
        <meta name="author" content="Bismarck Colombo">
        <meta name="keywords" content="Web Design, Web Developer, Full Stack, programer, freelance, programador web, desarrollador web">
        <meta name="X-UA-Compatible" content="IE=Edge">
        <meta name="revisit-after" content="7 days">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- - - - -->
    <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
        <!-- - - - -->
    
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <link rel="stylesheet" href="../css/fancybox.css">
    <link rel="stylesheet" href="../css/odometer-theme-minimal.css">
    <!-- - - - -->
    <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/style_dark.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/matrix.css">
    <!-- - - - -->
</head>
<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="load-splitter"></div>
        <div class="load-splitter"></div>
        <div class="loader">
            <p class="text">Blogs<span> ....</span></p>
            <div class="loading-bar">
                <span></span>
            </div>
        </div>
    </div>
    <!-- - - - -->

    <!-- Start Header -->
    <header class="header-sliding">
        <?php echo menublog(); ?>
    </header>
    <!-- End Header -->

<!-- Start Home -->
    <?php echo matrix(); ?>
<!-- End Home -->

<!-- Start Blog -->
    <?php echo boxs($conexion); ?>
<!-- End Blog -->

<!-- Start Footer -->
    <?php echo foter(); ?>
<!-- End Footer -->

<!-- Start Cursor -->
<!--
<div class="fancy-cursor-dot"></div>
<div class="fancy-cursor-circle"></div>
-->
<!-- End Cursor -->

<!-- JS Files -->

<?php   echo scripts(); ?>
<!-- - - - -->
</body>
</html>