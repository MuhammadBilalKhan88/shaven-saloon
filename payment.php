<?php
include("admin/Database/connection.php");
session_start();
$message = "";
// Assuming $_SESSION['price'] is already set; initializing the price variable
$price = isset($_SESSION["price"]) ? $_SESSION["price"] : 0;

?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Appointment Details</title>
    <?php include("./include/head.php"); ?>
    <style>
        .info-group p {
            margin: 0;
            font-size: 16px;
            padding: 8px 0;
        }

        .card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 35px;
        }

        button:hover {
            background-color: #0056b3;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 16px;
        }

        form {
            padding: 0 !important;
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
</head>

<body>
    <!--Header area start-->
    <?php include("./include/header.php"); ?>
    <!--Header area end-->

    <!--Breadcrumb area start-->
    <div class="breadcumb-area jarallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                    <div class="indx_title_left_wrapper">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
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
    <!--Breadcrumb area end-->

    <!--Contact area start-->
    <section class="contact-area section">
        <div class="container">
            <div class="row justify-content-center" style="display: flex;place-content: center;">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="card">
                        <h2>Appointment Booked</h2>
                        <div class="info-group mb-3">
                            <label style="font-weight: bold;">Client Name:</label>
                            <p style="border-bottom: 1px solid #ddd;"><?php echo htmlspecialchars($_SESSION['full_Name'] ?? 'N/A'); ?></p>
                        </div>
                        <div class="info-group mb-3">
                            <label style="font-weight: bold;">Client Email:</label>
                            <p style="border-bottom: 1px solid #ddd;"><?php echo htmlspecialchars($_SESSION['User_Email'] ?? 'N/A'); ?></p>
                        </div>
                        <div class="info-group mb-3">
                            <label style="font-weight: bold;">Service Name:</label>
                            <p style="border-bottom: 1px solid #ddd;"><?php echo htmlspecialchars($_SESSION['servicename'] ?? 'N/A'); ?></p>
                        </div>
                        <div class="info-group mb-3">
                            <label style="font-weight: bold;">Assigned Employee:</label>
                            <p style="border-bottom: 1px solid #ddd;"><?php echo htmlspecialchars($_SESSION['Employees'] ?? 'N/A'); ?></p>
                        </div>
                        <div class="info-group mb-3">
                            <label style="font-weight: bold;">Appointment Date:</label>
                            <p style="border-bottom: 1px solid #ddd;"><?php echo htmlspecialchars($_SESSION['appointmentDate'] ?? 'N/A'); ?></p>
                        </div>
                        <div class="info-group mb-4">
                            <label style="font-weight: bold;">Total Amount:</label>
                            <h3 style="color: #555;">₹<?php echo htmlspecialchars(number_format($price, 2)); ?></h3>
                        </div>
                        <form method="POST" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                            <input type="hidden" name="business" value="bilalkhan4841o@gmail.com">
                            <input type="hidden" name="item_name" value="<?php echo htmlspecialchars($_SESSION['servicename']); ?>">
                         
                            <input type="hidden" name="amount" value="<?php echo htmlspecialchars($price); ?>">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="return" value="http://localhost/bilal/e-project/success.php">
                            <input type="hidden" name="cancel_return" value="http://localhost/bilal/e-project/cancel.php">
                            <button type="submit" style="background-color: #007bff; color: #fff; border: none; width: 100%; padding: 12px; font-size: 16px; border-radius: 5px; cursor: pointer;">
                                Proceed to Pay
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact area end-->

    <!--Footer area start-->
    <?php include("./include/footer.php"); ?>
    <!--Footer area end-->

    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
