<footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                            <?php
                                 $res = mysqli_query($conn, "SELECT * FROM `nosotros` WHERE `estado` = 1 ;");
                                           if (mysqli_num_rows($res) > 0) {
                                     while ($fs = mysqli_fetch_array($res)) {
                             ?>
                               <div class="widget-title">
                                    <h3><?php echo $fs['nombre']; ?></h3>
                                </div>
                                <p><?php echo $fs['resumen']; ?></p>
                                <?php
                                      }
                                 }
                                  ?>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi flaticon-location"></i>7 Green Lake Street Crawfordsville, IN 47933</li>
                                        <li><i class="fi flaticon-phone-call"></i>+1 800 123 456 789</li>
                                  <li><i class="fi flaticon-send"></i>info@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Servicios </h3>
                                </div>
                                <?php
                                 $res = mysqli_query($conn, "SELECT * FROM `servicios` WHERE `estado` = 1 ;");
                                           if (mysqli_num_rows($res) > 0) {
                                     while ($fs = mysqli_fetch_array($res)) {
                                ?>
                              <ul>
                                    <li><a href="service-single.php"><?php echo $fs['nombre']; ?></a></li>
                                  <!--   <li><a href="service-single.php">House Construction</a></li>
                                    <li><a href="service-single.php">Interior Desing</a></li>
                                    <li><a href="service-single.php">Road Construction</a></li>
                                    <li><a href="service-single.php">OutFiled Digging</a></li> -->
                                </ul>
                                <?php
                                      }
                                 }
                                  ?>
                            </div>
                        </div>
                        
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget instagram">
                                <div class="widget-title">
                                    <h3>Projects</h3>
                                </div>
                                <ul class="d-flex">
                                    <li><a href="project-single.php"><img src="assets/images/instragram/1.jpg" alt=""></a></li>
                                    <li><a href="project-single.php"><img src="assets/images/instragram/2.jpg" alt=""></a></li>
                                    <li><a href="project-single.php"><img src="assets/images/instragram/3.jpg" alt=""></a></li>
                                    <li><a href="project-single.php"><img src="assets/images/instragram/4.jpg" alt=""></a></li>
                                    <li><a href="project-single.php"><img src="assets/images/instragram/5.jpg" alt=""></a></li>
                                    <li><a href="project-single.php"><img src="assets/images/instragram/6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> Copyright &copy; 2021  All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>