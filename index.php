<?php

include("admin/Database/connection.php");

session_start();
error_reporting(0);





$Select_Conent = "SELECT * FROM concontact";
$Select_Conent_res = mysqli_query($conn, $Select_Conent);
$Select_Conent_res_row = mysqli_fetch_assoc($Select_Conent_res);




?>
<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<?php include("./include/head.php") ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--Preloader area start-->
    <div id="loader_wrapper">
        <div class="loader"></div>
    </div>
    <style>
        iframe {
            width: 100%;
            /* height: 500px; */
        }

        swiper-container {
            width: 90% !important;
            height: 61%;
            background-color: transparent;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent !important;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            /* height: 100%; */
            object-fit: cover;
        }
    </style>
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
    <!--Preloader area end-->

    <!--Header area start here-->
    <?php include("./include/header.php") ?>
    <!--Header area end here-->
    <!--Slider area start here-->
    <section class="slider-area">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <div class="carousel-captions caption-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h2 class="wow animated fadeInLeft" data-wow-duration="1s"><span>Real</span> Man’s to go<br> Real <span>Beards.</span></h2>
                                        <p class="wow animated fadeInLeft" data-wow-duration="2s">Hair Salon was founded in 1996 with the mission<br> of providing hair care services.</p>
                                        <a href="booking.php" class="btn1 wow animated fadeInUp" data-wow-duration="2s"><span>make a appointment</span></a>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class=" carousel-captions caption-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h2 class="wow animated fadeInLeft" data-wow-duration="1s"><span>Real</span> Man’s to go<br> Real <span>Beards.</span></h2>
                                        <p class="wow animated fadeInLeft" data-wow-duration="2s">Hair Salon was founded in 1996 with the mission<br> of providing hair care services.</p>
                                        <a href="#" class="btn1 wow animated fadeInUp" data-wow-duration="2s"><span>make a appointment</span></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-captions caption-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h2 class="wow animated fadeInLeft" data-wow-duration="1s"><span>Real</span> Man’s to go<br> Real <span>Beards.</span></h2>
                                        <p class="wow animated fadeInLeft" data-wow-duration="2s">Hair Salon was founded in 1996 with the mission<br> of providing hair care services.</p>
                                        <a href="#" class="btn1 wow animated fadeInUp" data-wow-duration="2s"><span>make a appointment</span></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number">1</span><span class="con">Waxing</span></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number">2</span><span class="con">Beards</span></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number">3</span><span class="con">Haircut</span></li>
                </ol>
            </div>
        </div>
    </section>
    <!--Slider area end here-->
    <!--Info area start here-->
    <section class="info-area-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pd-0">
                    <div class="info-list">
                        <figure>
                            <img src="images/info/1.jpg" alt="" />
                            <div class="content">
                                <h2>For Mens</h2>
                                <a href="#">See Pricing <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pd-0">
                    <div class="info-middel text-center bg-img jarallax">
                        <div class="info-logo">
                            <a href="index-2.php"><img src="images/logo/logo.png" alt="" /></a>
                        </div>
                        <div class="content">
                            <div class="section-heading-one">
                                <h2>Welcom to Barber Shop</h2>
                            </div>
                            <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                            <img src="images/info/signature.png" alt="" />
                            <a href="#" class="btn1"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pd-0 ">
                    <div class="info-list">
                        <figure>
                            <img src="images/info/2.jpg" alt="" />
                            <div class="content">
                                <h2>For Womens</h2>
                                <a href="#">See Pricing <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Info area end here-->
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
    <!--Plan and Price area start here-->
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
    <!--Plan and Price area end here-->
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
    <!--Banner area start here-->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content-ban">
                        <h2 class="wow animated fadeInLeft" data-wow-duration="1.5s">
                            <img src="images/icons/4.png" alt="" />
                            <span>Discount Coupon For -20% : </span>
                            <strong>BB01424</strong>
                        </h2>
                        <a href="#" class="btn2 wow animated fadeInRight" data-wow-duration="1s"><span>More Offer</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner area end here-->

    <!--Counter area start here-->
    <section class="counter-area bg-img section3 jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter-list wow animated fadeInLeft" data-wow-duration="0.8s">
                        <img src="images/counter/1.png" alt="" />
                        <span class="count">514</span>
                        <h4>Correvtive Makeup</h4>
                    </div>
                    <div class="counter-list wow animated fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.8s">
                        <img src="images/counter/2.png" alt="" />
                        <span class="count">145</span>
                        <h4>Number Of Award</h4>
                    </div>
                    <div class="counter-list wow animated fadeInLeft" data-wow-delay="0.8s" data-wow-duration="0.8s">
                        <img src="images/counter/3.png" alt="" />
                        <span class="count">922</span>
                        <h4>Happy Clients</h4>
                    </div>
                    <div class="counter-list wow animated fadeInLeft" data-wow-delay="1.1s" data-wow-duration="0.8s">
                        <img src="images/counter/4.png" alt="" />
                        <span class="count">26</span>
                        <h4>Amazing Team</h4>
                    </div>
                    <div class="counter-list wow animated fadeInLeft" data-wow-delay="1.4s" data-wow-duration="0.8s">
                        <img src="images/counter/5.png" alt="" />
                        <span class="count">147</span>
                        <h4>Piercing Done</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter area end here-->

    <!--Gallery area start here-->
    <section class="gallery-area">
        <div class="section-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading-two">
                            <h2>Our Gallery</h2>
                            <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div class="gallery-slider" id="gallery">
                        <div class="gallery-list">
                            <figure>
                                <a href="images/gallery/1.jpg"><img src="images/gallery/1.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                            <figure>
                                <a href="images/gallery/6.jpg"><img src="images/gallery/6.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="gallery-list">
                            <figure>
                                <a href="images/gallery/2.jpg"><img src="images/gallery/2.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="gallery-list">
                            <figure>
                                <a href="images/gallery/3.jpg"><img src="images/gallery/3.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                            <figure>
                                <a href="images/gallery/7.jpg"><img src="images/gallery/7.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="gallery-list">
                            <figure>
                                <a href="images/gallery/4.jpg"><img src="images/gallery/4.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="gallery-list">
                            <figure>
                                <a href="images/gallery/5.jpg"><img src="images/gallery/5.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                            <figure>
                                <a href="images/gallery/8.jpg"><img src="images/gallery/8.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="gallery-list">
                            <figure>
                                <a href="images/gallery/2.jpg"><img src="images/gallery/2.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                        <div class="gallery-list">
                            <figure>
                                <a href="images/gallery/3.jpg"><img src="images/gallery/3.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                            <figure>
                                <a href="images/gallery/7.jpg"><img src="images/gallery/7.jpg" alt="" />
                                    <span><i class="fa fa-search"></i></span>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Gallery area end here-->

    <!--Blog area start here-->
    <section class="blog-area section bg-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-three">
                        <h2>News & Offers</h2>
                        <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="blog-list">
                        <figure>
                            <img src="images/blog/1.jpg" alt="" />
                            <div class="date">
                                <strong>21</strong>
                                <span>jul</span>
                            </div>
                        </figure>
                        <div class="content">
                            <h3>50% Off on Mens Haircut</h3>
                            <p>Nibh vel velit auctor aliquet. nean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="blog-list">
                        <figure>
                            <img src="images/blog/2.jpg" alt="" />
                            <div class="date">
                                <strong>21</strong>
                                <span>jul</span>
                            </div>
                        </figure>
                        <div class="content">
                            <h3>50% Off on Mens Haircut</h3>
                            <p>Nibh vel velit auctor aliquet. nean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="blog-list">
                        <figure>
                            <img src="images/blog/3.jpg" alt="" />
                            <div class="date">
                                <strong>21</strong>
                                <span>jul</span>
                            </div>
                        </figure>
                        <div class="content">
                            <h3>50% Off on Mens Haircut</h3>
                            <p>Nibh vel velit auctor aliquet. nean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                            <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="load-btn text-center">
                        <a href="#" class="btn1 mr-t50"><span>View All</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog area end here-->

    <!--Brand area start here-->
    <section class="brand-area section bg-img jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-three">
                        <h2>Our Brand Partners</h2>
                        <p>Hair Salon was founded in 1996 with the mission of providing hair care services. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
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
    <!--Map area start here-->
    <div class="map-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd-0">
                    <div class="map-area">
                        <div style="width: 100%; height: 450px;">
                            <?php echo $Select_Conent_res_row["Google_Map_Link"]; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Map area end here-->
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
                        $about_qurey = "SELECT * FROM  conabout";
                        $res = mysqli_query($conn, $about_qurey);

                        while ($row = mysqli_fetch_array($res)) { ?>
                            <h2><?php echo$row["about_heading"]?></h2>
                            <p><?php echo $row["about_para"]?></p>
                        <?php }

                        ?>

                        <a href="#" class="btn1"><span>Read MOre</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner area end here-->
    <!--Footer area start here-->
    <?php include("include/footer.php") ?>

    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script>
        function initialize() {
            var mapOptions = {
                zoom: 16,
                scrollwheel: false,
                center: new google.maps.LatLng(40.6700, -73.9400),
                styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ede6dc"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ede6dc"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fff"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fff"
                    }, {
                        "lightness": 29
                    }, {
                        "weight": 0.2
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#fff"
                    }, {
                        "lightness": 18
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#d3cdc1"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#d3cdc1"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    }, {
                        "color": "#333333"
                    }, {
                        "lightness": 40
                    }]
                }, {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }, {
                        "lightness": 19
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 17
                    }, {
                        "weight": 1.2
                    }]
                }]
            };
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);
            var image = 'images/icons/map.png';
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map,
                icon: image
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</body>

</html>