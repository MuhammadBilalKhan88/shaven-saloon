<!DOCTYPE html>
<html lang="en">

<?php
include("database/connection.php");
include("Inculde/head.php");


$getid = $_GET['id'];
$qurey = "SELECT * FROM users WHERE id=$getid";


$res = mysqli_query($conn, $qurey);
$row = mysqli_fetch_array($res);



if (isset($_POST['edituser'])) {
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $password =  $_POST['pasword'];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);


    $query2 = "UPDATE `users` SET `name`='$name',`email`='$email',`paswword`='$passwordHash' WHERE `id`='$getid'";
    $res2 = mysqli_query($conn, $query2);
    




    if (!$res2 && !$res) {
        echo "Error: " . mysqli_error($conn);
    }


    if ($res) {
        header("location:manageuser.php");
        exit;
    } else {
        header("location:edituser.php");
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
        <?php  include("Inculde/sidebar.php") 
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include("Inculde/navbar.php") ?>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit User</h6>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">User Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row[1] ?>" name="name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" value="<?php echo $row[2] ?>" name="email" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <button type="submit" class="btn btn-primary" name="edituser">Edit User Accoounct</button>
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