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
        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Nosotros</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index.php">Inicio</a></li>
                                <li>nosotros</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <!-- start of wpo-about-section -->
        <section class="wpo-about-section section-padding">
            <div class="container">
                <div class="wpo-about-section-wrapper">
                    <div class="row align-items-center">
                        <?php
                             $res = mysqli_query($conn, "SELECT * FROM `nosotros` WHERE `estado` = 1 ;");
                             if (mysqli_num_rows($res) > 0) {
                                 while ($fs = mysqli_fetch_array($res)) {
                         ?>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="wpo-about-img">
                                
                                <img src="assets/images/<?php echo $fs['imagen']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-12">
                                
                            <div class="wpo-about-content">
                                <div class="wpo-section-title-s2">
                                    <h2><?php echo $fs['nombre']; ?></h2>
                                </div>
                                <div class="wpo-about-content-inner">
                                    <p><?php echo $fs['resumen']; ?></p>

                                    <?php
                                         }
                                     }
                                     ?>
                                    <!--
                                    <div class="signeture">
                                        <h4>Brubaker Nilka</h4>
                                        <p>Vertex Chambers, CEO</p>
                                        <span><img src="assets/images/signeture.png" alt=""></span>
                                    </div>
                                    -->
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-about-section -->
            <!-- start wpo-service-section -->
         <section class="wpo-service-section section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="wpo-section-title">
                            <h2> servicios</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                    <?php
                             $res = mysqli_query($conn, "SELECT * FROM `servicios` WHERE `estado` = 1 ;");
                             if (mysqli_num_rows($res) > 0) {
                                 while ($fs = mysqli_fetch_array($res)) {
                             ?>
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="<?php echo $fs['imagen']; ?>" alt="">
                             </div>
                             
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php"><?php echo $fs['nombre']; ?></a></h2>
                                  <p><?php echo $fs['resumen']; ?></p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                              
                         </div>
                         <?php
                                         }
                                     }
                             ?>    
                    </div>
                    <!--
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/service/2.jpg" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">House Construction</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/service/3.jpg" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Interior Design</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/service/4.jpg" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Floor and Roofs</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/service/5.jpg" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Electricity </a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/service/6.jpg" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Plumbing Construction</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                         </div>
                    </div>
                        <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/service/7.jpg" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Road Construction</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                         </div>
                    </div>


                     <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/service/8.jpg" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">Renovation</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                         </div>
                    </div>
                        <div class="col-lg-4 col-md-6 col-12">
                         <div class="wpo-service-item">
                             <div class="wpo-service-img">
                                 <img src="assets/images/service/9.jpg" alt="">
                             </div>
                             <div class="wpo-service-text">
                                  <h2><a href="service-single.php">OutFiled Digging</a></h2>
                                  <p>Electronic typesetting rema essentially unchanged was popularised.</p>
                                  <a href="service-single.php">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                             </div>
                         </div>
                    </div>
                     -->                  
                </div>
            </div>
        </section>
        <!-- end of wpo-service-section -->
        <!-- start wpo-fun-fact-section -->
        <section class="wpo-fun-fact-section section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="wpo-funfacts-text">
                            <h3>otros servicios</h3>
                          <!--
                            <div class="customer-review">
                                <h2>89K</h2>
                                <div class="reviews">
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                    <span>Customer Review</span>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                    <div class="col col-lg-6 offset-lg-1">
                        <div class="wpo-fun-fact-grids clearfix">
                            <?php
                             $res = mysqli_query($conn, "SELECT * FROM `servicios_detalle` WHERE `servicios` = 0 ;");
                             if (mysqli_num_rows($res) > 0) {
                                 while ($fs = mysqli_fetch_array($res)) {
                             ?>
                            <div class="grid">
                                <!--
                                <div class="icon">
                                    <img src="assets/images/icon/9.png" alt="">
                                </div>
                                 -->
                                <div class="info">
                                    <!--
                                        <h3><span class="odometer" data-count="200">00</span></h3>
                                 -->
                                    <p><?php echo $fs['nombre']; ?></p>
                                </div>
                            </div>
                            <?php
                                         }
                                     }
                             ?>    
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
        <!-- start wpo-Team-section -->
        <section class="wpo-team-section section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>equipo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been
                                the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-team-wrap">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/1.jpg" alt="">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h2><a href="team.php">Henry Barton</a></h2>
                                    <span>Team Leader</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/2.jpg" alt="">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h2><a href="team.php">Mattie Washington</a></h2>
                                    <span>Junior Member</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/3.jpg" alt="">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h2><a href="team.php">Winifred Harmon</a></h2>
                                    <span>Team Leader</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/4.jpg" alt="">
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wpo-team-text">
                                    <h2><a href="team.php">Shelia Lawrence</a></h2>
                                    <span>Senior Member</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end Team-section -->

        <!--Start wpo-testimonials-section-->
        <section class="wpo-testimonials-section section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>What People’s Say</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been
                                the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="testimonials-wrapper owl-carousel">
                              <div class="testimonials-item">
                                <div class="testimonials-item-top">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,typesetting industry. has been the industry's standard dummy text ever since.</p>
                                </div>
                                <div class="testimonials-item-bottom">
                                    <div class="testimonials-item-bottom-author">
                                        <img src="assets/images/testimonial/img-1.jpg" alt="">
                                    </div>
                                    <div class="testimonials-item-bottom-author-text">
                                        <h3>Henry Barton</h3>
                                        <span>Business Man</span>
                                    </div>
                                </div>
                              </div>
                              <div class="testimonials-item">
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
                              <div class="testimonials-item">
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
                              </div>
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
                            <h2>Latest News & Blog</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. has been
                                the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>
                <div class="wpo-blog-items">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-1.jpg" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <a class="date" href="blog-single.php">22 September, 2020</a>
                                    <h2><a href="blog-single.php">Making this the first true ones the uses a dictionary.</a></h2>
                                    <ul>
                                        <li>Mabel Fox</li>
                                        <li><a href="blog-single.php">26 Comments</a></li>
                                        <li>35 Share</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-blog-item">
                                <div class="wpo-blog-img">
                                    <img src="assets/images/blog/img-2.jpg" alt="">
                                </div>
                                <div class="wpo-blog-content">
                                    <a class="date" href="blog-single.php">22 September, 2020</a>
                                    <h2><a href="blog-single.php">A Behind the scenes look of your plumbing company</a></h2>
                                    <ul>
                                        <li>Mabel Fox</li>
                                        <li><a href="blog-single.php">26 Comments</a></li>
                                        <li>35 Share</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
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
                        </div>
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