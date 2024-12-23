<!DOCTYPE html>
<html lang="en">

<?php
include("database/connection.php");
include("Inculde/head.php");



if (isset($_POST['addContentabout'])) {

    $about_heading = $_POST['about_heading'];
    $about_para = $_POST['about_para'];


    // $_qurey = "UPDATE `conabout` SET `Saloon_Email`='$salon_email',`Saloon_ContactNo`='$salon_Pnumber',`Salonn_Location`='$saloon_location',`Google_Map_Link`='$saloon_GMap',`Salonn_Para`='$Salonn_Para' WHERE `id`=1";
     $_qurey = "INSERT INTO `conabout`(`about_heading`, `about_para`) VALUES ('$about_heading','$about_para')";
    $res = mysqli_query($conn, $_qurey);
}


?>

<head>
    <title>About</title>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include("Inculde/sidebar.php")
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include("Inculde/navbar.php")
            ?>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">About us Page Content</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="row">

                                  
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">About heading</label>
                                            <input type="text" class="form-control" value="<?php //echo $row['about_heading'] ?>" name="about_heading" id="exampleInputEmail1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">About Para</label>
                                            <input type="text" class="form-control" value="<?php //echo $row['about_heading'] ?>" name="about_para" id="exampleInputEmail1" required>
                                        </div>
                                    </div>
                                    
                               

                                </div>




                                <button type="submit" class="btn btn-primary" name="addContentabout">Sumbit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <?php include("Inculde/footer.php") ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>