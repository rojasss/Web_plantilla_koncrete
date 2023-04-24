
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
                            <h2>Appointment</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index.php">Home</a></li>
                                <li>Appointment</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <!-- start of wpo-contact-section -->
        <section class="wpo-contact-section-s2 section-padding">
            <div class="container">
                <div class="wpo-contact-section-wrapper">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-8 col-md-12 col-12">
                            <div class="wpo-contact-form-area">
                                <div class="wpo-section-title-s2">
                                    <span>ONLINE BOOKING</span>
                                    <h2>Online Booking For Appointments.</h2>
                                </div>
                                <form method="post" class="contact-validation-active" >
                                    <div class="row">
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="name">Full name here*</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Ross Ward">
                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email">Email here*</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="rossward@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="phone">Contact number*</label>
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    placeholder="+88 *** *** ***">
                                            </div>
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Select service*</label>
                                                <select name="subject" class="form-control">
                                                    <option disabled="disabled" selected>Subject</option>
                                                 <option value="Building Construction">Building Construction</option>
                            <option value="House Roomodel">House Roomodel</option>
                            <option value="Interior Design">Interior Design</option>
                            <option value="Renovation">Renovation</option>
                            <option value="OutField Digging">OutField Digging</option>
                            <option value="Road Construction">Road Construction</option>
    <option value="Floors & Roofs">Floors & Roofs</option>
                            <option value="Plumbing">Plumbing</option>
                            <option value="Electricity">Electricity</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col fullwidth col-lg-12 ">
                                            <div class="form-group">
                                                <label for="note">Short text*</label>
                                                <textarea class="form-control" name="message" id="message"
                                                    placeholder="Type your message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn">GET AN APPOINMENT</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.
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