<?php
include("admin/Database/connection.php");
$message = "";
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['book_Appointment'])) {
    
    $full_Name = $_POST['Full_Name'];
    $email_Address = $_POST['Email'];
    $Phome_Number = $_POST['Phome_Number'];
    $employee = $_POST['employee'];
    $serviceID = $_POST['services'];
    $appointmentDate = $_POST['appointmentDate'];

    $qurey = "INSERT INTO `booking_appointment`(`client_Name`, `client_Email`, `client_Pnumber`, `client_Service`, `client_Emoplye`, `client_appointment_dateTime`) VALUES ('$full_Name','$email_Address','$Phome_Number','$serviceID','$employee','$appointmentDate')";
    $res = mysqli_query($conn, $qurey);


    

    if ($res) {

        $Get_Service_Qurey = "SELECT * FROM `services` WHERE `Service_ID` = '$serviceID'";
        $serviceResult = mysqli_query($conn, $Get_Service_Qurey);
        $serviceData = mysqli_fetch_assoc($serviceResult);
        
     
  

        if ($serviceData){
           $serviceName = $serviceData['Service_Name'];
           $_SESSION["servicename"] = $serviceName;


           $servicePrice = $serviceData['Service_Price'];
           $_SESSION["price"] = $servicePrice;


           $serveiceUser_Name  =  $full_Name;
           $_SESSION["full_Name"] = $serveiceUser_Name;

           $serveiceUser_Email  =  $email_Address;
           $_SESSION["User_Email"] = $serveiceUser_Email;

           $serveiceUser_Employes  =  $employee;
           $_SESSION["Employees"] = $serveiceUser_Employes;

           $appointment_Date_Time  =   $appointmentDate;
           $_SESSION["appointmentDate"] =  $appointment_Date_Time;

            // Redirect to payment gateway with the service price
            header("Location: payment.php");
            exit();
        } else {
            $message = "Invalid service selected.";
        }
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}



?>



<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!--Header area start here-->
<?php include("./include/head.php") ?>
<!--Header area end here-->
<style>
    form {
        padding: 0px 250px;
    }

    select {
        width: 100%;
        border: 1px solid #e1e1e1;
        padding: 0 15px;
        height: 50px;
        transition: all 0.5s;
        border-right: 20px solid transparent !important;
    }
</style>

<body>
   
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!--Preloader area start-->
    <!-- <div id="loader_wrapper">
        <div class="loader"></div>
    </div> -->
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
                        <h2>contact us</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <li><a href="index-2.php">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Booking Appointment</li>
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
                        <h2>Booking Appointment</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-area">
                        <form method="post">
                            <fieldset>
                                <div class="row">

                                    <div class="col-sm-12 col-xs-12 feld">
                                        <input type="text" name="Full_Name" placeholder="Full Name *" required>
                                        <span><i class="fa fa-user"></i></span>
                                    </div>

                                    <div class="col-sm-12 col-xs-12 feld" style="margin-top: 10px;">
                                        <input type="text" name="Email" placeholder="Email *" required>
                                        <span><i class="fa fa-envelope"></i></span>
                                    </div>

                                    <div class="col-sm-12 col-xs-12 feld" style="margin-top: 10px;">
                                        <input type="text" name="Phome_Number" placeholder="Phome Number *" required>
                                        <span><i class="fa fa-phone"></i></span>
                                    </div>

                                    <div class="col-sm-12 col-xs-12 feld" style="margin-top: 10px;">
                                        <select name="services" required>
                                            <option value="" >---Select Services--</option>
                                            <?php
                                            $sql = "SELECT * FROM `services`";
                                            $res = mysqli_query($conn, $sql);

                                            while ($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                                <option value="<?php echo $row["Service_Id"]; ?>">
                                                    <?php echo $row["Service_Name"]; ?> - <?php echo $row["Service_Price"]; ?>
                                                </option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-xs-12 feld" style="margin-top: 10px;">
                                        <select name="employee" required>
                                            <option value="">---Select Employees---</option>
                                            <?php
                                            $sql = "SELECT * FROM `shaven_team`";
                                            $res = mysqli_query($conn, $sql);

                                            while ($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                                <option value="<?php echo $row["our_Team_Name"]; ?>">
                                                    <img src="images/ourteam/<?php echo $row["our_Team_Image"]; ?>" alt="Team Member" style="width: 40px; height: 40px; border-radius: 100%;">
                                                    <?php echo $row["our_Team_Name"]; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-xs-12 feld" style="margin-top: 10px;">
                                        <input type="datetime-local" name="appointmentDate" placeholder="Appointment Time *" required>
                                    </div>

                                </div>
                            </fieldset>

                            <div class="btn-area text-center">
                                <button class="btn3" type="submit" name="book_Appointment"><span>Payment</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Contact area end here-->
    <!--Footer area start here-->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="foo-about">
                            <div class="foo-logo">
                                <a href="#"><img src="images/logo/logo2.png" alt="" /></a>
                            </div>
                            <div class="content">
                                <p>Hair Salon was founded in 1996 with the mission.</p>
                                <span>+880 848 4575</span>
                                <p>Proin gravida nibh vel velittor aliquet. Aenean solcitudin.</p>
                                <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="weight foo-link">
                            <h3>Papular Services</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Email Us</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Help Center</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Order Status</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Shipping</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Request a Catalog</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Gift Cards</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Product Index</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="weight foo-link">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>About Us</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Terms & Conditions</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Privacy Policy</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Careers</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Contact Us</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Our Sitemap</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i><span>Order and Returns</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="weight foo-link">
                            <h3>Location</h3>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> P.O. Box 123 New York, NY 10012 US.</li>
                                <li><i class="fa fa-envelope"></i> Support@aosomemail.com</li>
                                <li><i class="fa fa-phone"></i> +1 234 567 890</li>
                                <li><i class="fa fa-globe"></i> www.aosomemail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copy-right-text">
                            <p>&copy; 2024. All rights reserved. Design &amp; Developed by <a href="#">Aosomemail</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copy-right-menu">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer area end here-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>