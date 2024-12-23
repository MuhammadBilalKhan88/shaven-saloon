<?php include("admin/Database/connection.php");
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const icons = document.querySelectorAll(".icons");

        icons.forEach((icon) => {
            const img = icon.querySelector(".ico-imgs");
            const originalSrc = img.getAttribute("data-original");
            const hoverSrc = img.getAttribute("data-hover");

            icon.addEventListener("mouseover", () => {
                img.src = hoverSrc;
            });

            icon.addEventListener("mouseout", () => {
                img.src = originalSrc;
            });
        });
    });
</script>
<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!--Header area start here-->
<?php include("./include/head.php") ?>
<!--Header area end here-->

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!--Preloader area start-->
         <div id="loader_wrapper">
        <div class="loader"></div>
    </div> 
    <!--Preloader area end-->
    <!--Header area start here-->
    <?php include("./include/header.php") ?>
    <!--Header area end here-->
    <!--Breadcumb area start here-->
    <div class="breadcumb-area jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 full_width">
                    <div class="indx_title_left_wrapper">
                        <h2> our services</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <li><a href="index-2.php">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li> services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcumb area end here-->

    <!--Services area start here-->
    <section class="services-area-two">
        <div class="container">
            <div class="row">

                <?php

                $qurey = "SELECT * FROM `services`";
                $res = mysqli_query($conn, $qurey);
                while ($row = mysqli_fetch_array($res)) {
                    $service_image = $row["Service_Image"];
                    $White_service_image = $row["White_Service_Image"];

                ?>


                    <div class="col-md-3 col-sm-6">
                        <div class="services-list text-center">
                            <div class="icons" style="place-content:center;">
                                <img
                                    class="ico-imgs"
                                    src="images/services/<?php echo $row['Service_Image']; ?>"
                                    data-hover="images/whiteservices/<?php echo $row['White_Service_Image']; ?>"
                                    data-original="images/services/<?php echo $row['Service_Image']; ?>"
                                    style="width: auto !important; height:auto !important">

                            </div>
                            <h4><?php echo $row[1] ?></h4>
                            <h4><?php echo "$" . $row[3] ?></h4>
                            <p><?php echo $row[2] ?></p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>

                <?php
                }




                ?>


                <!-- <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">


                        </div>
                        <h4><?php //echo $row[1] 
                            ?></h4>
                        <p><? //php // echo $row[2] 
                            ?></p>



                    </div>
                </div> -->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico2"></span>
                        </div>
                        <h4>Beard Treatment</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico3"></span>
                        </div>
                        <h4>Coloring Services</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico4"></span>
                        </div>
                        <h4>Beard Waxing</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico1"></span>
                        </div>
                        <h4>Haircuts & Styling</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico2"></span>
                        </div>
                        <h4>Beard Treatment</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico3"></span>
                        </div>
                        <h4>Coloring Services</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico4"></span>
                        </div>
                        <h4>Beard Waxing</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico1"></span>
                        </div>
                        <h4>Haircuts & Styling</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico2"></span>
                        </div>
                        <h4>Beard Treatment</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico3"></span>
                        </div>
                        <h4>Coloring Services</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="services-list text-center">
                        <div class="icons">
                            <span class="ico-imgs ico4"></span>
                        </div>
                        <h4>Beard Waxing</h4>
                        <p>Haircut, shampoo/conditior & hot towel finish.</p>
                        <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--Services area end here-->
    <!--About area start here-->
    <section class="about-area-one">
        <div class="section-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading-two">
                            <h2>What We Do</h2>
                            <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                    <div class="about-list-right">
                        <figure>
                            <img src="images/about/1.jpg" alt="" />
                        </figure>
                        <div class="content">
                            <h4>Traditional Haircuts Mens</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                    <div class="about-list-right">
                        <figure>
                            <img src="images/about/2.jpg" alt="" />
                        </figure>
                        <div class="content">
                            <h4>Traditional Haircuts Mens</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                    <div class="about-list-right">
                        <figure>
                            <img src="images/about/3.jpg" alt="" />
                        </figure>
                        <div class="content">
                            <h4>Traditional Haircuts Mens</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                    <div class="about-list-left">

                        <figure>
                            <img src="images/about/4.jpg" alt="" />
                        </figure>
                        <div class="content">
                            <h4>Traditional Haircuts Mens</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                    <div class="about-list-left">

                        <figure>
                            <img src="images/about/5.jpg" alt="" />
                        </figure>
                        <div class="content">
                            <h4>Traditional Haircuts Mens</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pd-0">
                    <div class="about-list-left">

                        <figure>
                            <img src="images/about/6.jpg" alt="" />
                        </figure>
                        <div class="content">
                            <h4>Traditional Haircuts Mens</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About area end here-->
    <!--Banner area start here-->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content-ban">
                        <h2>
                            <img src="images/icons/4.png" alt="" />
                            <span>Discount Coupon For -20% : </span>
                            <strong>BB01424</strong>
                        </h2>
                        <a href="#" class="btn2"><span>More Offer</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner area end here-->
    <!--Testimonial area start here-->
    <section class="testimonial-area bg-img section jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div class="testimonial-slider">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial-list">
                                <blockquote>"There is something in the act of having tattoos done that I love.It can be addictive. "</blockquote>
                                <h4><a href="#">~ Akshay Handge ~</a></h4>
                                <span>(Founder)</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial-list">
                                <blockquote>"There is something in the act of having tattoos done that I love.It can be addictive. "</blockquote>
                                <h4><a href="#">~ Akshay Handge ~</a></h4>
                                <span>(Founder)</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial-list">
                                <blockquote>"There is something in the act of having tattoos done that I love.It can be addictive. "</blockquote>
                                <h4><a href="#">~ Akshay Handge ~</a></h4>
                                <span>(Founder)</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial-list">
                                <blockquote>"There is something in the act of having tattoos done that I love.It can be addictive. "</blockquote>
                                <h4><a href="#">~ Akshay Handge ~</a></h4>
                                <span>(Founder)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial area end here-->
    <section class="booking-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="booking-time">
                        <div class="heading">
                            <h2>Opening Times</h2>
                            <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin
                                gravida nibh vel velit auctor aliquet. Aenean sollicituds, lorem quis bibendum auctor.
                            </p>
                        </div>
                        <div class="booking-days">
                            <ul>
                                <li><strong>Monday</strong><span>7.00–18.00</span></li>
                                <li><strong>Tuesday</strong><span>7.00–18.00</span></li>
                                <li><strong>Wednesday</strong><span>7.00–18.00</span></li>
                                <li><strong>Thursday</strong><span>7.00–18.00</span></li>
                                <li><strong>Friday</strong><span>7.00–18.00</span></li>
                                <li><strong>Saturday</strong><span>7.00–18.00</span></li>
                            </ul>
                            <div class="close-day">
                                <p>Sunday - Closed</p>
                            </div>
                            <div class="book-now-btn" style="text-align: center; margin-top: 10px;">
                                <a href="booking.php" class="btn4" style="background-color: #000;margin-top: 20px;"><span>MAKE A APPOINTMENT</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Banner area start here-->
    <section class="banner-area-two pd-t0 bg-img jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg6 col-md-6 col-sm-12 col-xs-12">
                    <div class="banner-img">
                        <img src="images/about/1.png" alt="" />
                    </div>
                </div>
                <div class="col-lg6 col-md-6 col-sm-12 col-xs-12">
                    <div class="banner-con">
                        <h2>Do you like our hairdresser?</h2>
                        <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                        <a href="#" class="btn1"><span>Read MOre</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner area end here-->

    <!--Footer area start here-->
    <?php include("include/footer.php") ?>
    <!--Footer area end here-->
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- tether js -->
    <script src="js/tether.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- bxslider js -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- magnific popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jarallax js -->
    <script src="js/jarallax.min.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Bootstrap Touchspin js -->
    <script src="js/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Progressbar Animation js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>