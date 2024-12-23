<!DOCTYPE html>
<html lang="en">

<?php include("./Inculde/head.php") ?>
<?php include("./Database/connection.php") ?>

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
        <?php include("./Inculde/sidebar.php") ?>
        <!-- Sidebar End -->



        <!-- Content Start -->
        <div class="content">

            <!-- Navbar  Start -->
            <?php include("./Inculde/navbar.php") ?>
            <!-- Navbar  End -->

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->





</script>
<!-- end Google Calendar Appointment Scheduling -->
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="addServices.php">
                            <h6 class="mb-0"><i class="fa-solid fas fa-plus mx-2" style="color: #EB1616; "></i> Create New Accounct</h6>
                        </a>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">

                                    <th scope="col">id</th>
                                    <th scope="col">Services Name</th>
                                    <th scope="col">Services Details</th>
                                    <th scope="col">Services Price</th>
                                    <th scope="col">Services Image</th>
                                    <th scope="col">White Services Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $qurey  = "SELECT * FROM services";
                                $res = mysqli_query($conn, $qurey);
                                while ($row  = mysqli_fetch_array($res)) { ?>
                                    <tr>

                                        <td><?php echo $row[0]  ?></td>
                                        <td><?php echo $row[1]  ?></td>
                                        <td><?php echo $row[2]  ?></td>
                                        <td><?php echo $row[3]  ?></td>
                                        <td><img src="../images/services/<?php echo $row[4] ?>"></td>   
                                        <td><img src="../images/whiteservices/<?php echo $row[5] ?>"></td>

                                        <td><a class="btn btn-sm bg-warning text-white" href="editServices.php?id=<?php  echo $row[0]; ?>">Edit</a>
                                     <a class="btn btn-sm btn-primary" href="DeleteServices.php?id=<?php echo $row[0];?>">Delete</a>
                                    </tr>
                                <?php }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->



            <!-- Footer Start -->
            <?php include("./Inculde/footer.php") ?>
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
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<script>
  
$(document).ready(function(){
    $("#example").DataTable();
})


</script>