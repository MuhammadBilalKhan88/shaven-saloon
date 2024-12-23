<?php
$login = false;
session_start();
// if (isset($_SESSION["user"])) {
//     header("location:index.php");
//     exit(); // Ensure no further execution
// }


include("admin/Database/connection.php");

$msg = ''; // Initialize the message variable
if (isset($_POST['SignIn'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE email='{$email}'";
    $res = mysqli_query($conn, $query);

    if (!$res) {
        die("Query Failed: " . mysqli_error($conn));
    }

    $user = mysqli_fetch_assoc($res);
    if ($user) {
        if (password_verify($password, $user["paswword"])) {

            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] = $email;
            $_SESSION['username'] = $username;


            header("location:index.php");
            exit();
        } else {
            $msg = "<div class='alert alert-danger'>Password does not match.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>Email does not exist.</div>";
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shaven | HTML5 BOOTSTRAP TEMPLATE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- login-page css -->
    <link rel="stylesheet" href="css/login-page.css">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- bxslider css -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Bootstrap Touchspin css -->
    <link rel="stylesheet" href="css/jquery.bootstrap-touchspin.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

    <!--Preloader area start-->

    <!-- <div id="loader_wrapper">
        <div class="loader"></div>
    </div> -->
    <!--Preloader area end-->

    <div class="main-page">

        <div class="smooth login" id="login">
            <h1 class="login__header header">Welcome back to the Shaven Saloon</h1>
            <p class="login__byline">It's good to see you again, come in using your favourite social network</p>
            <div class="social-media__container">
                <span class="fa-stack fa-lg social-media__icon icon">
                    <i class="fas fa-circle fa-stack-2x" style="color: #48556D;"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-lg social-media__icon icon">
                    <i class="fas fa-circle fa-stack-2x" style="color: #DF4D3B;"></i>
                    <i class="fab fa-google-plus-g fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-lg social-media__icon icon">
                    <i class="fas fa-circle fa-stack-2x" style="color: #48556D;"></i>
                    <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <fieldset class="form">
                <legend class="form__legend">OR</legend>
                <form class="form__body form-login" method="post" style="padding: 0;">.
                    <?php echo  $msg; ?>

                    <input class="form__input" type="email" name="email" placeholder="Enter Your Email Address">
                    <input class="form__input" type="password" name="password" placeholder="Enter Your Email Password">
                    <button class=" btn2 wow animated fadeInRight" style="background-color: #cf9c67; color: #fff;" type="submit" name="SignIn"><span>Login</span></button>
                    <p style="margin-top: 10px;">Not Registred Yet <a href="register.php">Registered Here</a></p>
                </form>
            </fieldset>
        </div>



    </div>
    <?php include("include/footer.php") ?>
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
<script>
    const login = document.getElementById('login');
    const signup = document.getElementById('signup');

    const showText = {
        login: {
            header: 'Not yet a member?',
            byline: 'Sign up and discover what we can do for you',
            buttonText: 'Sign up'
        },

        signup: {
            header: 'Already a member?',
            byline: 'Sign in and see what\'s new since your last visit',
            buttonText: 'Sign in'
        }
    }
    const switchButton = document.getElementById('switch-button');
    const switchText = document.getElementById('switch-text');

    switchButton.addEventListener('click', () => {
        login.classList.toggle('hide-view');
        signup.classList.toggle('hide-view');
        login.classList.contains('hide-view') ? changeSwitchText('signup') : changeSwitchText('login')
    })

    function changeSwitchText(el) {
        switchText.children[0].innerText = showText[el].header;
        switchText.children[1].innerText = showText[el].byline;
        switchButton.innerText = showText[el].buttonText;
    }
</script>