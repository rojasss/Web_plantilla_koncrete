<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
   <title>koncrete | Construction & Building Template</title>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <?php include "header.php"; ?>
        <!-- end of header -->
        <!-- start of hero -->
        <section class="wpo-hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                        <?php
                              $res = mysqli_query($conn, "SELECT * FROM `slyder` WHERE `estado` = 1 ;");
                               if (mysqli_num_rows($res) > 0) {
                                 while ($fs = mysqli_fetch_array($res)) {
                         ?>
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/<?php echo $fs['imagen']; ?>">
                            <div class="gradient-overlay"></div>
                            <div class="container">
                                <div class="slide-content">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2><?php echo $fs['titulo']; ?></h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p><?php echo $fs['nombre']; ?></p>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!--<div data-swiper-parallax="500" class="slide-btns">
                                        <a href="appointment.php" class="btn theme-btn">BOOK ONLINE</a>
                                    </div>-->
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <?php
                           }
                      }
                       ?>                  
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-3.jpg">
                            <div class="gradient-overlay"></div>
                            <div class="container">
                                <div class="slide-content">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2>Best Construction Services And Affordable Prices!</h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div data-swiper-parallax="500" class="slide-btns">
                                        <a href="appointment.php" class="btn theme-btn">BOOK ONLINE</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of wpo-hero-slide-section-->
        <!-- start of wpo-features-section -->
        <section class="wpo-features-section-s2">
            <div class="container">
                <div class="wpo-features-wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="col col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="wpo-features-item">
                                <div class="wpo-features-icon">
                                     <img src="assets/images/icon/calendar.svg" alt="">
                                </div>
                                <div class="wpo-features-text">
                                    <h4>Book Online</h4>
                                </div>
                            </div>
                            <div class="angle"><img src="assets/images/icon/6.png" alt=""></div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="wpo-features-item active">
                                <div class="wpo-features-icon">
                                     <img src="assets/images/icon/express-delivery.svg" alt="">
                                </div>
                                <div class="wpo-features-text">
                                    <h4>We Arrive</h4>
                                </div>
                            </div>
                            <div class="angle"><img src="assets/images/icon/6.png" alt=""></div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-4 col-12">
                            <div class="wpo-features-item">
                                <div class="wpo-features-icon">
                                     <img src="assets/images/icon/prototype.svg" alt="">
                                </div>
                                <div class="wpo-features-text">
                                    <h4>Solve Problem</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-features-section -->

        <!-- start wpo-service-section -->
        <section class="wpo-service-section-s2 section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    
                    <div class="col-lg-5">
                        <div class="wpo-section-title">
                            <h2>banner</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                         <?php
                           $res = mysqli_query($conn, "SELECT * FROM `banner` WHERE `estado` = 1 ;");
                                     if (mysqli_num_rows($res) > 0) {
                               while ($fs = mysqli_fetch_array($res)) {
                       ?>
                    <div class="col-lg-4 col-md-6 col-12">
                   
                        <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/icon/<?php echo $fs['imagen']; ?>" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="<?php echo $fs['url']; ?>"><?php echo $fs['nombre']; ?></a></h2>
                                 
                             </div>
                             <div class="visible-icon">
                                <img src="assets/images/icon/kitchen-utensils.png" alt="">
                             </div>
                         </div>
                        
                    </div>
                        <?php
                                 }
                            }
                             ?>
                  <!--  <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                <img src="assets/images/icon/gas-stove.png" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Gas Line Services</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                             </div>
                             <div class="visible-icon">
                                <img src="assets/images/icon/gas-stove.png" alt="">
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                <img src="assets/images/icon/water-tap.png" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Water Line Repair</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                             </div>
                             <div class="visible-icon">
                                <img src="assets/images/icon/water-tap.png" alt="">
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                <img src="assets/images/icon/sink.png" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Bathroom Construction</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                             </div>
                             <div class="visible-icon">
                                <img src="assets/images/icon/sink.png" alt="">
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                <img src="assets/images/icon/basement.png" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Basement Construction</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                             </div>
                             <div class="visible-icon">
                                <img src="assets/images/icon/basement.png" alt="">
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                <img src="assets/images/icon/remodeling.png" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Remodeling Service</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                             </div>
                             <div class="visible-icon">
                                <img src="assets/images/icon/remodeling.png" alt="">
                             </div>
                         </div>
                    </div>
                        -->
                </div>
            </div>
        </section>
        <!-- end of wpo-service-section -->
        <!-- start wpo-fun-fact-section -->
        <section class="wpo-fun-fact-section-s2 section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-12">
                        <div class="wpo-fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="icon">
                                    <img src="assets/images/icon/9.png" alt="">
                                </div>
                                <div class="info">
                                    <h3><span class="odometer" data-count="200">00</span></h3>
                                    <p>Running Project</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <img src="assets/images/icon/10.png" alt="">
                                </div>
                                <div class="info">
                                    <h3><span class="odometer" data-count="85">00</span>+</h3>
                                    <p>Team Member</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <img src="assets/images/icon/11.png" alt="">
                                </div>
                                <div class="info">
                                    <h3><span class="odometer" data-count="39">00</span>K</h3>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <img src="assets/images/icon/12.png" alt="">
                                </div>
                                <div class="info">
                                    <h3><span class="odometer" data-count="45">00</span></h3>
                                    <p>Awards Winning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-fun-fact-section -->
         <!-- start wpo-projects -->
        <section class="wpo-projects section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>proyectos</h2></h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters projects-menu">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All Project</a></li>

                            </ul>
                        </div>
                        <div class="projects-grids gallery-container clearfix">
                            <?php
                                  $res = mysqli_query($conn, "SELECT * FROM `proyectos` WHERE `estado` = 1 ;");
                                            if (mysqli_num_rows($res) > 0) {
                                      while ($fs = mysqli_fetch_array($res)) {
                            ?>
                            <div class="grid  Residential Factory">
                            
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/<?php echo $fs['imagen']; ?>" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php"><?php echo $fs['nombre']; ?></a></h3>
                                            <p class="cat"><?php echo $fs['resumen']; ?></p>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <?php
                                                  }
                                             }
                                              ?>
                          <!--  <div class="grid Commercial">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-6.jpg" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php">Commercial Construction Construction</a></h3>
                                            <p class="cat">Construction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid Factory">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-2.jpg" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php">Commercial Construction Construction</a></h3>
                                            <p class="cat">Construction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid Roof Replacement">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-7.jpg" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php">Commercial Construction Construction</a></h3>
                                            <p class="cat">Construction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid Roof Replacement">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-8.jpg" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php">Commercial Construction Construction</a></h3>
                                            <p class="cat">Construction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid Residential Factory">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-9.jpg" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php">Commercial Construction Construction</a></h3>
                                            <p class="cat">Construction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid Residential Factory">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-3.jpg" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php">Commercial Construction Construction</a></h3>
                                            <p class="cat">Construction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid Residential Factory">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-10.jpg" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php">Commercial Construction Construction</a></h3>
                                            <p class="cat">Construction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid Residential Factory ">
                                <div class="project-inner">
                                    <div class="img-holder">
                                        <img src="assets/images/projects/img-11.jpg" alt>
                                    </div>
                                    <div class="hover-content">
                                        <div class="details">
                                            <h3><a href="project-single.php">Commercial Construction Construction</a></h3>
                                            <p class="cat">Construction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end wpo-projects -->
        <!-- start wpo-Team-section -->
        <section class="wpo-team-section section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>equipo</h2>

                        </div>
                    </div>
                </div>
                <div class="wpo-team-wrap">
                    <div class="row">
                       <div class="col col-lg-3 col-md-6 col-12"> 
                            <div class="wpo-team-item">
                                
                               
                            </div>
                        </div>
                        
                        <div class="col col-lg-3 col-md-6 col-12">
                        <?php
                                              $res = mysqli_query($conn, "SELECT * FROM `equipo` WHERE `estado` = 1 ;");
                                                        if (mysqli_num_rows($res) > 0) {
                                                  while ($fs = mysqli_fetch_array($res)) {
                                          ?>
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/<?php echo $fs['imagen']; ?>" alt="">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h2><a href="team.php"><?php echo $fs['resumen']; ?></a></h2>
                                    <span><?php echo $fs['titulo']; ?></span>
                                    <ul>
                                            <li><p>telefono :<?php echo $fs['telefono']; ?></p></li>
                                            <li><p>Correo : <?php echo $fs['correo']; ?></p></li>
                                            <li><p>ciudad : <?php echo $fs['ciudad']; ?></p></li>
                                     </ul>
                                </div>
                            </div>
                            <?php
                                   }
                              }
                               ?>
                        </div>
                       <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-team-item">
                                
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12"> 
                            <div class="wpo-team-item">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end Team-section -->
        <!-- start of wpo-contact-section -->
        <section class="wpo-contact-section section-padding">
            <div class="wpo-contact-img">
                <img src="assets/images/contact.jpg" alt="">
                <a href="https://www.youtube.com/embed/jAPsZ7_4bxg" class="video-btn" data-type="iframe">
                    <i class="fi flaticon-play"></i>
                </a>
            </div>
            <div class="wpo-contact-img-s2">
                <img src="assets/images/2.jpg" alt="">
            </div>
            <div class="container">
                <div class="wpo-contact-section-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-contact-form-area">
                                <div class="wpo-section-title-s2">
                                    <span>reservas</span>
                                    <h2>tus datos</h2>
                                </div>
                                <form method="post" class="contact-validation-active" id="contact-form">
                                    <div class="row">
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="name">nombre completo*</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="nombre y apellido">
                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email">Email aqui*</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="ejemplo@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="phone">telefono*</label>
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    placeholder="+51 *** *** ***">
                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-12">
                                        
                                            <div class="form-group">
                                                <label>selecionar servicio*</label>
                                                 <select name="subject" class="form-control">
                                                    <option disabled="disabled" selected>Servicio</option>
                                                   <!-- <option value="Building Construction">Building Construction</option>-->
                                                    <?php
                                              $res = mysqli_query($conn, "SELECT * FROM `servicios` WHERE `estado` = 1 ;");
                                                        if (mysqli_num_rows($res) > 0) {
                                                  while ($fs = mysqli_fetch_array($res)) {
                                          ?>
                                                         <option value="<?php echo $fs['id']; ?>"><?php echo $fs['nombre']; ?></option>
                                                        <!-- <option value="Interior Design">Interior Design</option>
                                                         <option value="Renovation">Renovation</option>
                                                         <option value="OutField Digging">OutField Digging</option>
                                                         <option value="Road Construction">Road Construction</option>
                                                         <option value="Floors & Roofs">Floors & Roofs</option>
                                                         <option value="Plumbing">Plumbing</option>
                                                         <option value="Electricity">Electricity</option>-->
                                                         <?php
                                                  }
                                             }
                                              ?>
                                                </select>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col fullwidth col-lg-12 ">
                                            <div class="form-group">
                                                <label for="note">mensaje*</label>
                                                <textarea class="form-control" name="note" id="note"
                                                    placeholder="escribe el mensaje aqui"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn">enviar</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">gracias!!</div>
                                        <div id="error"> Error al enviar el correo , por favor intentarlo mas tarde.
                                        </div>
                                    </div>
                                </form>
                                <div class="border-style"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-contact-section -->
        <!--Start wpo-testimonials-section-->
        <section class="wpo-testimonials-section section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>testimonios</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="testimonials-wrapper owl-carousel">
                        <?php
                               $res = mysqli_query($conn, "SELECT * FROM `testimonios` WHERE `estado` = 0 ;");
                                         if (mysqli_num_rows($res) > 0) {
                                   while ($fs = mysqli_fetch_array($res)) {
                           ?>                
                              <div class="testimonials-item">
                                <div class="testimonials-item-top">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,typesetting industry. has been the industry's standard dummy text ever since.</p>
                                </div>
                                <div class="testimonials-item-bottom">
                                    <div class="testimonials-item-bottom-author">
                                        <img src="assets/images/testimonial/img-1.jpg" alt="">
                                    </div>
                                    <div class="testimonials-item-bottom-author-text">
                                        <h3><?php echo $fs['titulo']; ?></h3>
                                        <span><?php echo $fs['url']; ?></span>
                                    </div>
                                </div>
                              </div>
                              <?php
                                       }
                                  }
                                   ?>       
                            <!--  <div class="testimonials-item">
                                <div class="testimonials-item-top">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,typesetting industry. has been the industry's standard dummy text ever since.</p>
                                </div>
                                <div class="testimonials-item-bottom">
                                    <div class="testimonials-item-bottom-author">
                                        <img src="assets/images/testimonial/img-2.jpg" alt="">
                                    </div>
                                    <div class="testimonials-item-bottom-author-text">
                                        <h3>Simon Mendoza</h3>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                              </div>
                             <!--- <div class="testimonials-item">
                                <div class="testimonials-item-top">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,typesetting industry. has been the industry's standard dummy text ever since.</p>
                                </div>
                                <div class="testimonials-item-bottom">
                                    <div class="testimonials-item-bottom-author">
                                        <img src="assets/images/testimonial/img-3.jpg" alt="">
                                    </div>
                                    <div class="testimonials-item-bottom-author-text">
                                        <h3>Muriel Garrett</h3>
                                        <span>Business Man</span>
                                    </div>
                                </div>
                              </div> -->
                        </div>
                    </div>

                </div> <!-- end row -->
            </div>
        </section>
        <!--End wpo-testimonials-section-->
        <!-- start wpo-blog-section -->
        <section class="wpo-blog-section section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>noticias & publicaciones</h2>

                        </div>
                    </div>
                </div>
                <div class="wpo-blog-items">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                            <?php
                                  $res = mysqli_query($conn, "SELECT * FROM `noticias` WHERE `estado` = 1 ;");
                                            if (mysqli_num_rows($res) > 0) {
                                      while ($fs = mysqli_fetch_array($res)) {
                              ?>
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-1.jpg" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                  < <a class="date" href="<?php echo $fs['url']; ?>"><?php echo $fs['fecha']; ?></a>
                                    <h2><a href="<?php echo $fs['url']; ?>"><?php echo $fs['nombre']; ?></a></h2>
                                    <span>noticias</span>
                                   <!-- <ul>
                                        <li>Mabel Fox</li>
                                        <li><a href="blog-single.php">26 Comments</a></li>
                                        <li>35 Share</li>
                                    </ul>-->
                                </div>
                                <?php
                                        }
                                   }
                                    ?>          
                            </div>
                        </div>
                        <?php
                                  $res = mysqli_query($conn, "SELECT * FROM `publicaciones` WHERE `estado` = 1 ;");
                                            if (mysqli_num_rows($res) > 0) {
                                      while ($fs = mysqli_fetch_array($res)) {
                              ?>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-2.jpg" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <a class="date" href="<?php echo $fs['url']; ?>"><?php echo $fs['fecha']; ?></a>
                                    <p><?php echo $fs['subtitulo']; ?></p>
                                    <h2><a href="<?php echo $fs['url']; ?>"><?php echo $fs['titulo']; ?></a></h2>
                                    <span>publicaciones</span>
                                   <!-- <ul>
                                        <li>Mabel Fox</li>
                                        <li><a href="blog-single.php">26 Comments</a></li>
                                        <li>35 Share</li>
                                    </ul>-->
                                </div>
                            </div>
                         
                        </div>
                        <?php
                                        }
                                   }
                                    ?>  
                       <!-- <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-3.jpg" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <a class="date" href="blog-single.php">22 September, 2020</a>
                                    <h2><a href="blog-single.php">Now grab your tool belt and get to work!</a></h2>
                                    <ul>
                                        <li>Mabel Fox</li>
                                        <li><a href="blog-single.php">26 Comments</a></li>
                                        <li>35 Share</li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-section -->
   <!-- start of wpo-site-footer-section -->
   <?php include"footer.php"; ?>
        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>


</html>