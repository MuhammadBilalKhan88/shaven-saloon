<?php

include("admin/Database/connection.php");
$message = "";

session_start();

if (!empty($_GET)) {
    // Validate and sanitize GET parameters
    $item_name = $_GET['item_name'];
    $txn_id = $_GET['PayerID'];
    $amount = $_GET['amt'];
    $_SESSION['txn_id'] = $_GET['tx']; 
    $currency = $_GET['cc'];
    $status = ($_GET['st']);
    $payer_id =$_GET['payer_id'];
    $payer_email =$_GET['payer_email'];
    $payer_name = $_GET['first_name'];


    $_SESSION['txn_id'] = $_GET['tx']; 
    // Store data in session
    $_SESSION['product'] = $item_name;
    $_SESSION['PayerID'] = $txn_id;
    $_SESSION['amount'] = $amount;
    $_SESSION['currency'] = $currency;
    $_SESSION['status'] = $status;
    $_SESSION['payer_id'] = $payer_id;
    $_SESSION['payer_email'] = $payer_email;
    $_SESSION['payer_name'] = $payer_name;

    // Prepare SQL query using prepared statements
    $sql = "INSERT INTO `payment_paypal`(`user_name`, `user_email`, `service_name`, `currrency_name`, `ammount`, `status`,`Transaction_id`)
     VALUES 
     ('$payer_name','$payer_email','$item_name','$currency','$amount','$status','$txn_id')";

$res = mysqli_query($conn,$sql);
  
}


?>
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
                        <h2>Appointment Booked</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <!-- <li><a href="index-2.php">Home</a> &nbsp;&nbsp;&nbsp;> </li> -->
                            <li>Appointment Booked</li>
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
                    <div class="section-heading-three">
                        <h2>Your Appointment Has Been Booked </h2>
                        <div class="alert alert-success">
                            <strong>Success!</strong> Payment has been successful
                        </div>

                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Transaction Id</td>
                                    <td><?php echo $_SESSION['txn_id'];?></td>
                                </tr>
                                <tr>
                                    <td>User Name</td>
                                    <td><?php echo $_SESSION['full_Name'];?></td>
                                </tr>
                                <tr>
                                    <td>User Email</td>
                                    <td><?php echo $_SESSION['User_Email'];?></td>
                                </tr>
                                <tr>
                                    <td>Services Name</td>
                                    <td><?php echo $_SESSION['servicename']; ?></td>
                                </tr>
                                <tr>
                                    <td>Amount</td>
                                    <td><?php echo $_SESSION['price']; ?></td>
                                </tr>

                                <tr>
                                    <td>Payment Status</td>
                                    <td><?php echo $_SESSION['status']; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!--Contact area end here-->
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

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <

        </body>

</html>