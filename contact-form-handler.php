<?php
session_start();
include("admin/Database/connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Cfull_Name = $_POST['Full_Name'];
    $Cemail_Address = $_POST['Email'];
    $CSubject = $_POST['Subject'];
    $CMessage = $_POST['Message'];



    $qurey = "INSERT INTO `contactus`(`contact_Fname`, `contact_Email`, `contact_Subject`, `contact_Message`) VALUES  ('$Cfull_Name','$Cemail_Address','$CSubject','$CMessage')";
    $res = mysqli_query($conn, $qurey);

    // Instantiation and passing `true` enables exceptions

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;

        $mail->Username = 'muhammadbilalkhannnn@gmail.com'; // SMTP username
        $mail->Password = 'bzassdkglegsgzji'; // SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('muhammadbilalkhannnn@gmail.com', 'Shaven Saloon');
        $mail->addAddress($Cemail_Address, $Cfull_Name); // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank You for Contacting Us - Shaven Salon';
        $mail->Body = "
                       <h1><strong>Dear</strong>$Cfull_Name,</h1>

                         <p>Thank you for reaching out to us! We have received your message and appreciate you taking the time to contact us. Here are the details you provided:</p>

                         <h2><strong>Full Name:</strong>$Cfull_Name</h2>
                         <h2><strong>Email:</strong>$Cemail_Address</h2>
                         <h2><strong>Subject:</strong>$CSubject</h2>
                         <h2><strong>Message:</strong></h2>
                         <p>$CMessage</p>

                         <p>Our team will review your inquiry and get back to you as soon as possible. We strive to provide excellent service and are here to assist with any questions, appointment requests, or feedback you may have.</p>

                         <p>If you need immediate assistance, feel free to contact us directly at <strong>support@hairsalon.com</strong> or call us at <strong>(123)456-7890</strong>.</p>

                         <h4>Best Regards,</h4>
                         <p><strong>The Shaven Salon Team</strong></p>
                         <hr>
                         <p><i>Note: This is an automated email confirmation. Please do not reply directly to this email.</i></p>

                          ";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        // echo "<div class='alert alert-success'>Message has been sent</div>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header("Location: index.php");
    exit(0);
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
                        <h2>Thank You</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <!-- <li><a href="index-2.php">Home</a> &nbsp;&nbsp;&nbsp;> </li> -->
                            <li>Thank You</li>
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
                        <h2>Thank You for Reaching Out!</h2>
                        <p>
                            e’ve received your message and truly appreciate you taking the time to contact us. Our team will review your inquiry and get back to you as soon as possible.

                            At Hair Salon, we value every connection and are here to assist with any questions, appointment bookings, or feedback you may have.

                        </p>
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