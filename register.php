<?php

include("admin/Database/connection.php");
if (isset($_POST['regsterBtn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['userName']);
    $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $password = $_POST['userPassword'];
    $confirm_password = $_POST['confrimPassword'];


    $passwordHash  = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();
    if (empty($name) or empty($email) or empty($password) or empty($confirm_password)) {
        array_push($errors, "All Filed Are Required");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not Valid");
    }

    if (strlen($password) < 6) {
        array_push($errors, "Password Must be 6 letter long ");
    }

    if ($password !== $confirm_password) {
        array_push($errors, "Password Does Not Match");
    }


    $sql = "SELECT * FROM users WHERE  email='$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        array_push($errors, "Email is already existis");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {

        $sql = "INSERT INTO `users`( `name`, `email`, `paswword`) VALUES (?,?,?)";
        $stmt  = mysqli_stmt_init($conn);
        $prepareStmt   = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are registered Successfully. <a href='login.php'>Login</a></div>";
        } else {
            die("somthing went wrong");
        }
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


        <div class="smooth signup" id="signup">
            <h1 class="signup__header header">Create a new account</h1>
            <p class="signup__byline">You can use your favourite social network</p>
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

            <form action="" class="text-center" method="POST">
                <fieldset class="form">
                    <legend class="form__legend">OR</legend>
                    <form action="" class="form__body form-login">


                        <div class="input__group">
                            <input class="form__input form__input-half" type="text" placeholder="Enter Your Name" name="userName" value="<?php if (isset($_POST['regsterBtn'])) {
                                                                                                                                                echo $name;
                                                                                                                                            }  ?>">
                            <input class="form__input form__input-half" type="email" placeholder="Enter Your Email" name="userEmail" value="<?php if (isset($_POST['regsterBtn'])) {
                                                                                                                                                echo $email;
                                                                                                                                            }  ?>">
                        </div>

                        <div class="input__group">
                            <input class="form__input form__input-half" type="password" placeholder="Enter Your Password" name="userPassword">
                            <input class="form__input form__input-half" type="password" placeholder="Enter Your Confirmed Password" name="confrimPassword">
                        </div>
                        <div class="input__group">
                            <input class="form__input-checkbox" type="checkbox"> I have read the <a href="#">terms and conditions</a>
                            <a href="login.php">login</a>
                        </div>
                        <button style="margin-top: 20px;" class="btn1" type="submit" name="regsterBtn"><span>Sign up</span></button>
                    </form>
                </fieldset>
            </form>

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



</body>

</html>