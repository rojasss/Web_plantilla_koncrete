<?php include "date.php"; ?>
<?php include "config.php"; ?>

<header id="header">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-7 col-md-5 col-sm-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i><img src="assets/images/icon/1.png" alt=""></i><span id="hora"></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-5 col-md-7 col-sm-12 col-12">
                            <div class="contact-info">

                                <ul>
                                          <?php
                                              $res = mysqli_query($conn, "SELECT * FROM `equipo` WHERE `estado` = 1 ;");
                                                        if (mysqli_num_rows($res) > 0) {
                                                  while ($fs = mysqli_fetch_array($res)) {
                                          ?>
                                    <li><a href="#"><i><img src="assets/images/icon/2.png" alt=""></i><?php echo $fs['telefono']; ?></a></li>
                                             <?php
                                                  }
                                             }
                                              ?>
                                    <li class="lan-sec">
                                        <div class="lang-menu">
                                            <button class="flag-button">
                                                <span class="flag-img">
                                                    <img src="assets/images/flag/en.svg" alt="">
                                                    <span>English</span>
                                                </span>
                                            </button>
                                            <ul class=""> 
                                                <li class="flag-item">
                                                    <span class="flag-img">
                                                        <img src="assets/images/flag/es.png" alt="">
                                                        <span>Spain</span>
                                                    </span>
                                                </li>
                                                <li class="flag-item">
                                                    <span class="flag-img">
                                                        <img src="assets/images/flag/fr.png" alt="">
                                                        <span>France</span>
                                                    </span>
                                                </li>
                                                <li class="flag-item">
                                                    <span class="flag-img">
                                                        <img src="assets/images/flag/it.png" alt="">
                                                        <span>Italy</span>
                                                    </span>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->
            <div class="wpo-site-header">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <!--
                                         <li class="menu-item-has-children">
                                            <a class="active" href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a class="active" href="index.php">Home style 1</a></li>
                                                <li><a href="index-2.php">Home style 2</a></li>
                                                <li><a href="index-3.php">Home style 3</a></li>
                                            </ul>
                                        </li>
                                            -->
                                        <?php
                                            $res = mysqli_query($conn, "SELECT * FROM `menu` WHERE `estado` = 1 ;");
                                            if (mysqli_num_rows($res) > 0) {
                                            while ($fs = mysqli_fetch_array($res)) {
                                        ?>
                                        
                                        <li><a href="<?php echo $fs['ruta']; ?>"><?php echo $fs['nombre']; ?></a></li>
                                        
                                        <?php
                                             }
                                            }
                                        ?>
                                       <!--
                                       <li class="menu-item-has-children">
                                            <a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.php">Service</a></li>
                                                <li><a href="service-s2.php">Service style 2</a></li>
                                                <li><a href="service-single.php">Service Single</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="project.php">Project</a></li>
                                                <li><a href="project-single.php">Project Single</a></li>
                                                <li><a href="appointment.php">Appointment</a></li>
                                                <li><a href="terms.php">Terms & Conditions</a></li>
                                                <li><a href="testimonial.php">Testimonial</a></li>
                                                <li><a href="pricing.php">Pricing</a></li>
                                                <li><a href="404.php">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="blog.php">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.php">Blog right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.php">Blog left sidebar</a></li>
                                                <li><a href="blog-fullwidth.php">Blog fullwidth</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Blog details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single.php">Blog details right sidebar</a>
                                                        </li>
                                                        <li><a href="blog-single-left-sidebar.php">Blog details left
                                                                sidebar</a></li>
                                                        <li><a href="blog-single-fullwidth.php">Blog details
                                                                fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                        -->
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col col-lg-3 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i
                                                    class="fi flaticon-magnifiying-glass"></i></button>
                                            <div class="header-search-form">
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here...">
                                                        <button type="submit"><i
                                                                class="fi flaticon-magnifiying-glass"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-form">
                                        <a class="theme-btn" href="contact.php">GET FREE QUOTE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
