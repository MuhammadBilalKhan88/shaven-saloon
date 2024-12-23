<?php
session_start();
include("admin/Database/connection.php");
// $message = "";
//  if (isset($_POST['feedback'])) {

//     $FB_Full_Name = $_POST['FB_Full_Name'];
//     $FB_Email_Address = $_POST['FB_Email'];
//     $FB_Subject = $_POST['FB_Subject'];
//     $Additional_Feedback = $_POST['additionalFeedback'];


//     $qurey = "INSERT INTO `saloon_feedback`(`FB_Full_Name`, `FB_Email_Address`, `FB_Subject`, `Additional_Feedback`) VALUES  ('$FB_Full_Name','$FB_Email_Address','$FB_Subject','$Additional_Feedback')";
//     $res = mysqli_query($conn, $qurey);
//     exit();
// }




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
                        <h2>Feed Back From</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <!-- <li><a href="index-2.php">Home</a> &nbsp;&nbsp;&nbsp;> </li> -->
                            <li>Feed Back</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcumb area end here-->

    <!--Contact area start here-->

    <!--Contact area start here-->
    <section class="contact-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-three">
                        <h2>Feed Back Form</h2>
                        <p>At Hair Salon, your opinion matters to us. Please take a moment to share your feedback about your recent experience with us. Your comments will help us improve and provide better services in the future.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-area">
                        <form method="post" action="feedback-form-handler.php" style="padding: 0 !important;">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="FB_Full_Name" placeholder="Full Name *" required>
                                        <span><i class="fa fa-user"></i></span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="FB_Email" placeholder="Email *" required>
                                        <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="FB_Subject" placeholder="Subject" required>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="feld">
                                    <textarea name="additionalFeedback" rows="4" placeholder="Any additional comments or feedback you would like to share with us." required></textarea>
                                    <span class="msg"><i class="fa fa-pencil-square-o"></i></span>
                                </div>
                            </fieldset>
                            <div class="btn-area text-center">
                                <?php
                                // if (isset($_SESSION["smtpstatus"]) ) {
                                  
                                //     echo "<div class='alert alert-success'>".$_SESSION['smtpstatus'] . "</div>";
                                // }
                                ?>

                                <button class="btn3" type="submit" name="feedback"><span>Submit</span></button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact area end here-->
    <!--Contact area end here-->
    <!--Footer area start here-->
    <?php include("include/footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
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