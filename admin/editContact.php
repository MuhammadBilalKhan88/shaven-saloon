<!DOCTYPE html>
<html lang="en">

<?php
include("Database/Connection.php");
include("inculde/head.php");

$getid = $_GET['id'];

$contact_query = "SELECT * FROM contactus WHERE `contact_UId`='$getid'";
$contact_query_res = mysqli_query($conn, $contact_query);

if ($contact_query_res) {
    $contact_query_res_row = mysqli_fetch_array($contact_query_res, MYSQLI_ASSOC);
} else {
    echo "Error: " . mysqli_error($conn);
    exit;
}
if (!$contact_query_res) {
    die("Query failed: " . mysqli_error($conn));
}
if (isset($_POST['edit_contact'])) {
    $contact_Fname = $_POST['contact_Fname'];
    $contact_Email = $_POST['contact_Email'];
    $contact_Subject = $_POST['contact_Subject'];
    $contact_Message = $_POST['contact_Message'];

    $update_contact_query = "UPDATE `contactus` SET `contact_Fname`='$contact_Fname',`contact_Email`='$contact_Email',`contact_Subject`='$contact_Subject',`contact_Message`='$contact_Message' WHERE `contact_UId`='$getid'";

 
    $update_contact_query_res = mysqli_query($conn, $update_contact_query);

    if ($update_contact_query_res) {
        header("location:manageContact.php");
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
                            <h6 class="mb-4">Edit Contact</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">Contact User Name</label>
                                    <input type="text" class="form-control" name="contact_Fname" value="<?php echo $contact_query_res_row["contact_Fname"] ?>" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact User Email</label>
                                    <input type="email" class="form-control" name="contact_Email" value="<?php echo $contact_query_res_row["contact_Email"] ?>" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact Subject</label>

                                    <input type="text" value="<?php echo $contact_query_res_row["contact_Subject"] ?>" class="form-control" name="contact_Subject" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Addtional Contact</label><br>
                                    <textarea name="contact_Message" rows="5" cols="50"><?php echo $contact_query_res_row["contact_Message"] ?>"</textarea>

                                </div>

                                <button type="submit" class="btn btn-primary" name="edit_contact">Edit Contact</button>
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