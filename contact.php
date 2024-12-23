<?php

include("admin/Database/connection.php");
$message = "";
if (isset($_POST['contactUS'])) {

    $Cfull_Name = $_POST['Full_Name'];
    $Cemail_Address = $_POST['Email'];
    $CSubject = $_POST['Subject'];
    $CMessage = $_POST['Message'];


    $qurey = "call insertContact('$Cfull_Name','$Cemail_Address','$CSubject','$CMessage')";
    $res = mysqli_query($conn, $qurey);
    exit();
}

$Select_Conent = "SELECT * FROM concontact";
$Select_Conent_res = mysqli_query($conn, $Select_Conent);
$Select_Conent_res_row = mysqli_fetch_assoc($Select_Conent_res);




?>
<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!--Header area start here-->
<?php include("./include/head.php") ?>
<!--Header area end here-->
<style>
    iframe {
        width: 100%;
        height: 450px;
    }
</style>

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
                        <h2> contact us</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <li><a href="index-2.php">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcumb area end here-->

    <!--Contact area start here-->
    <section class="contact-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="map-area">
                        <a href="#" class="go-map">Go to Map</a>
                        <div style="width: 100%; height: 450px;">
                            <?php echo $Select_Conent_res_row["Google_Map_Link"]; ?>
                        </div>
                        <!-- <div id="map"  class="map-full" style="width:100%; height:450px;z-index: 999;">
                           
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row mr-b80">
                <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                    <div class="contact-info">
                        <span><i class="fa fa-map-marker"></i></span>
                        <p><?php echo $Select_Conent_res_row["Salonn_Location"] ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                    <div class="contact-info">
                        <span><i class="fa fa-phone"></i></span>
                        <p><?php echo $Select_Conent_res_row["Saloon_ContactNo"] ?></p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                    <div class="contact-info">
                        <span><i class="fa fa-envelope"></i></span>
                        <p><?php echo $Select_Conent_res_row["Saloon_Email"] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-three">
                        <h2>Get in touch</h2>
                        <p><?php echo $Select_Conent_res_row["Salonn_Para"] ?></p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-area">
                        <form method="post" action="contact-form-handler.php" style="padding: 0 !important;">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="Full_Name" placeholder="Full Name *" required>
                                        <span><i class="fa fa-user"></i></span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="Email" placeholder="Email *" required>
                                        <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="Subject" placeholder="Subject" required>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="feld">
                                    <textarea placeholder="Message" name="Message" required></textarea>
                                    <span class="msg"><i class="fa fa-pencil-square-o"></i></span>
                                </div>
                            </fieldset>
                            <div class="btn-area text-center">

                                <button class="btn3" type="submit" name="contactUS"><span>Send Now</span></button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact area end here-->
    <!--Footer area start here-->
    <?PHP include("include/footer.php") ?>
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

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(23.763029, 90.392530),
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ede6dc"
                        }, {
                            "lightness": 17
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ede6dc"
                        }, {
                            "lightness": 20
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#fff"
                        }, {
                            "lightness": 17
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#fff"
                        }, {
                            "lightness": 29
                        }, {
                            "weight": 0.2
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#fff"
                        }, {
                            "lightness": 18
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ffffff"
                        }, {
                            "lightness": 16
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#d6e9b9"
                        }, {
                            "lightness": 21
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#d6e9b9"
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
                            "color": "#d6e9b9"
                        }, {
                            "lightness": 20
                        }]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#d6e9b9"
                        }, {
                            "lightness": 17
                        }, {
                            "weight": 1.2
                        }]
                    }
                ]
            };
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);
            var image = 'images/icons/map-marker.png';
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // function submitFeedback() {
        var messageText = "<?= $_SESSION["smtpstatus"] ?? ''; ?>";
        if (messageText != "") {
            Swal.fire({
                title: 'Thank You for Feedback',
                text: messageText,
                icon: "success"
            });
            <?php unset($_SESSION["smtpstatus"]); ?>
        }
    </script>