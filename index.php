<?php 
require 'conec/conexion.php';
require 'asset/footer.php';
require 'asset/boxsBlog.php';
require 'asset/startHome.php';
require 'asset/menuBar.php';
require 'asset/formContact.php';

error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <title>Biscoder</title>
    <!-- Meta Tags -->
    <meta name="Description" content="Biscoder">
    <meta name="distribution" content="global">
    <meta name="Robots" content="index, follow, all">
    <meta name="googlebot" content="index, follow, all">
    <meta name="google" content="traslate">
    <meta name="author" content="Bismarck colombo">
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/odometer-theme-minimal.css">
    <!-- - - - -->
    <!-- Main CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/style_dark.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- - - - -->
    
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="load-splitter"></div>
        <div class="load-splitter"></div>
        <div class="loader">
            <p class="text">Biscoder<span>.com</span></p>
            <div class="loading-bar">
                <span></span>
            </div>
        </div>
    </div>
    <!-- - - - -->

    <!-- Start Header -->
    <header class="header-sliding">
        <?php echo menu(); ?>
    </header>
    <!-- End Header -->

    <!-- Start Home -->
    <?php echo starthome(); ?>
    <!-- End Home -->

    <!-- Start Blog -->
    <?php echo boxsblog($conexion); ?>
    <!-- End Blog -->

    <!-- Start Contact -->
    <?php echo formCont($conexion); ?>
    <!-- End Contact -->

    <!-- Start Footer -->
    <?php echo foter(); ?>
    <!-- End Footer -->

    <!-- Start Cursor -->
    <div class="fancy-cursor-dot"></div>
    <div class="fancy-cursor-circle"></div>
    <!-- End Cursor -->
    

    <!-- JS Files -->
    <script src="js/jQuery.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.animatedheadline.min.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particles_shape_dark.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/fancybox.umd.js"></script>
    <script src="js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="js/validacion.js"></script>
    <script>
      AOS.init();
  </script>
  <script type="text/javascript">


</script>
<!-- - - - -->
</body>
</html>