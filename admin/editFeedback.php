<!DOCTYPE html>
<html lang="en">

<?php
include("Database/Connection.php");
include("inculde/head.php");

$getid = $_GET['id'];

$feedback_query = "SELECT * FROM saloon_feedback WHERE `feedback_Id`='$getid'";
$feedback_query_res = mysqli_query($conn, $feedback_query);

if ($feedback_query_res) {
    $feedback_query_res_row = mysqli_fetch_array($feedback_query_res, MYSQLI_ASSOC);
} else {
    echo "Error: " . mysqli_error($conn);
    exit;
}
if (!$feedback_query_res) {
    die("Query failed: " . mysqli_error($conn));
}
if (isset($_POST['edit_feedback'])) {
    $FB_Full_Name = $_POST['FB_Full_Name'];
    $FB_Email_Address = $_POST['FB_Email_Address'];
    $FB_Subject = $_POST['FB_Subject'];
    $Additional_Feedback = $_POST['Additional_Feedback'];

    $update_feedback_query = "UPDATE `saloon_feedback` SET
        `FB_Full_Name`='$FB_Full_Name',
        `FB_Email_Address`='$FB_Email_Address',
        `FB_Subject`='$FB_Subject',
        `Additional_Feedback`='$Additional_Feedback'
        WHERE `feedback_Id`='$getid'";

    $update_feedback_query_res = mysqli_query($conn, $update_feedback_query);

    if ($update_feedback_query_res) {
        header("location:manageFeedback.php");
    } else {
        echo "Error: " . mysqli_error($conn);
        echo "<script>alert('Try Again...')</script>";
    }
}
?>

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
                            <h6 class="mb-4">Edit Feedback</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">Feedback User Name</label>
                                    <input type="text" class="form-control" name="FB_Full_Name" value="<?php echo $feedback_query_res_row["FB_Full_Name"] ?>" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Feedback User Email</label>
                                    <input type="email" class="form-control" name="FB_Email_Address" value="<?php echo $feedback_query_res_row["FB_Email_Address"] ?>" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Feedback Subject</label>

                                    <input type="text" value="<?php echo $feedback_query_res_row["FB_Subject"] ?>" class="form-control" name="FB_Subject" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Addtional Feedback</label><br>
                                    <textarea name="Additional_Feedback" rows="5" cols="50"><?php echo $feedback_query_res_row["Additional_Feedback"] ?>"</textarea>

                                </div>

                                <button type="submit" class="btn btn-primary" name="edit_feedback">Edit Feedback</button>
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