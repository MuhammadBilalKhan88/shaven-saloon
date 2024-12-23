<?php include("admin/Database/connection.php"); ?>
<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<!--Header area start here-->
<?php include("./include/head.php") ?>
<!--Header area end here-->

<body>
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
                        <h2> about us</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <li><a href="index-2.php">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcumb area end here-->
    <!--About gallery area start here-->
    <div class="about-gallery section2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-img-slider">
                        <figure><img src="images/gallery/9.jpg" alt="" /></figure>
                        <figure><img src="images/gallery/10.jpg" alt="" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About gallery area end here-->
    <!--Banner area start here-->
    <section class="banner-area-two bg-img jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg6 col-md-6 col-sm-12 col-xs-12">
                    <div class="banner-img">
                        <img src="images/about/1.png" alt="" />
                    </div>
                </div>
                <div class="col-lg6 col-md-6 col-sm-12 col-xs-12">
                    <div class="banner-con">
                        <?php

                        $about_query = "SELECT *FROM conabout";
                        $res = mysqli_query($conn, $about_query);
                        while ($row = mysqli_fetch_array($res)) { ?>
                            <h2><?php echo $row["about_heading"] ?></h2>
                            <p><?php echo $row["about_para"] ?></p>
                            <a href="#" class="btn1"><span>Read MOre</span></a>
                        <?php
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner area end here-->
    <!--Team area start here-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <section class="team-area section bg-img jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-two">
                        <h2>Meet our Amazing Team</h2>
                        <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
                    space-between="30" free-mode="true">



                    <?php

                    $qurey2 = "SELECT * FROM `shaven_team`";
                    $res2 = mysqli_query($conn, $qurey2);
                    while ($row2 = mysqli_fetch_array($res2, MYSQLI_ASSOC)) {


                    ?>


                        <swiper-slide style="width: 341px;">
                            <div class="team-member text-center">
                                <div class="team-img">
                                    <img src="images/ourteam/<?php echo $row2["our_Team_Image"]  ?>" alt="">
                                    <div class="overlay">
                                        <div class="team-details text-center">
                                            <p>
                                                <?php echo $row2["our_Team_Skills"]  ?>
                                                <?php echo $row2["our_Team_Details"]  ?>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <h6 class="team-title text-white" style="color: white;"> <?php echo $row2["our_Team_Skills"]  ?></h6>
                                <span style="color: white;"> <?php echo $row2["our_Team_Name"]  ?></span>
                            </div>
                        </swiper-slide>



                    <?php
                    }


                    ?>

                </swiper-container>
            </div>
            <!-- end team member -->

        </div>
        </div>
    </section>
    <!--Team area end here-->
    <!--Services area start here-->
    <section class="services-area-one bg-img jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div class="services-slider">

                        <?php
                        $qurey = "SELECT * FROM `services`";
                        $res = mysqli_query($conn, $qurey);
                        while ($row = mysqli_fetch_array($res)) {
                            $service_image = $row["Service_Image"];
                            $White_service_image = $row["White_Service_Image"];

                        ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="services-list text-center">
                                    <div class="icons">
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


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services area end here-->
    <!--Booking area start here-->
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
    <!--Booking area end here-->
    <!--Brand area start here-->
    <section class="brand-area section bg-img jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-three">
                        <h2>Our Brand Partners</h2>
                        <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin
                            gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div class="brand-slider">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brand-list">
                                <a href="#"><img src="images/client/1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brand-list">
                                <a href="#"><img src="images/client/2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brand-list">
                                <a href="#"><img src="images/client/3.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brand-list">
                                <a href="#"><img src="images/client/4.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brand-list">
                                <a href="#"><img src="images/client/5.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brand-list">
                                <a href="#"><img src="images/client/6.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brand-list">
                                <a href="#"><img src="images/client/1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="brand-list">
                                <a href="#"><img src="images/client/2.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand area end here-->

    <?php include("include/footer.php") ?>
</body>

</html>