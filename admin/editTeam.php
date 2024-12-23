<!DOCTYPE html>
<html lang="en">

<?php
include("database/connection.php");
include("Inculde/head.php");


$date = date('d');
$millisecond = round(microtime(true) * 1000) % 1000;

$getid = $_GET['id'];

$Select_all_team = "SELECT * FROM shaven_team  WHERE `our_Team_Id`='$getid' ";
$Select_all_team_res = mysqli_query($conn, $Select_all_team);

$Select_all_team_res_row = mysqli_fetch_array($Select_all_team_res,  MYSQLI_ASSOC);




if (isset($_POST['Add_Team_Memeber'])) {
    $Team_Name =  $_POST['Team_Name'];
    $Team_Name_Rspace = preg_replace('/\s+/', '', $Team_Name);
    $our_Team_Pnumber =  $_POST['our_Team_Pnumber'];

    $our_Team_Image =  $_FILES['our_Team_Image'];
    $our_Team_Image_Name = $our_Team_Image['name'];
    $our_Team_Image_Fname = $Team_Name_Rspace . "-" . $date . "-" . $millisecond . "-" . $our_Team_Image_Name;
    move_uploaded_file($our_Team_Image['tmp_name'], "../images/ourteam/" . $our_Team_Image_Fname);

    // $our_Team_Image_Fname =  $Select_all_team_res_row['our_Team_Image'];
    // if (!empty($_FILES['our_Team_Image']['name'])) {

    // }




    $Team_Email =  $_POST['Team_Email'];
    $Team_Details =  $_POST['Team_Details'];
    $Team_Wschedule =  $_POST['Team_Wschedule'];
    $Team_Skills =  $_POST['Team_Skills'];
    $Team_Rates =  $_POST['Team_Rates'];
    $Services_Name =  $_POST['Services_Name'];

    $our_Team_Image_Fname = $Select_all_team_res_row['our_Team_Image'];
    if (!empty($_FILES['our_Team_Image']['name'])) {
        $our_Team_Image = $_FILES['our_Team_Image'];
        $our_Team_Image_Name = $our_Team_Image['name'];
        $our_Team_Image_Fname = $Team_Name_Rspace . "-" . $date . "-" . $millisecond . "-" . $our_Team_Image_Name;
        move_uploaded_file($our_Team_Image['tmp_name'], "../images/ourteam/" . $our_Team_Image_Fname);
    } else {
        // Agar nayi image nahi di gayi toh purani image ka naam use karein
        $our_Team_Image_Fname = $Select_all_team_res_row['our_Team_Image'];
    }


    $Update_Team_Query = "UPDATE `shaven_team` SET 
    `our_Team_Name`='$Team_Name',
    `our_Team_Pnumber`='$our_Team_Pnumber',
    `our_Team_Email`='$Team_Email',
    `our_Team_Details`='$Team_Details',
    `our_Team_Image`='$our_Team_Image_Fname',
    `our_Team_Skills`='$Team_Skills',
    `our_Team_Wschedule`='$Team_Wschedule',
    `our_Team_rates`='$Team_Rates',
    `Services_Name`='$Services_Name'
     WHERE `our_Team_Id`='$getid'";

    $Update_Team_Query_res = mysqli_query($conn, $Update_Team_Query);
    if (!$Update_Team_Query_res) {
        echo "Error" . mysqli_error($conn);
    }
    if ($Update_Team_Query_res) {

        header("location:manageTeam.php");
    } else {
        echo "<script> alert('Try Again...') </script>";
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
                            <h6 class="mb-4">Add Team Member</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">Team Member Name</label>
                                    <input type="text" class="form-control" name="Team_Name" value="<?php echo $Select_all_team_res_row["our_Team_Name"] ?>" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team Member Phone Number</label>
                                    <input type="number" class="form-control" name="our_Team_Pnumber" value="<?php echo $Select_all_team_res_row["our_Team_Pnumber"] ?>" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team Member Image</label>
                                    <img src="../images/ourteam/<?php echo $Select_all_team_res_row["our_Team_Image"] ?>" style='height: 100px;'>
                                    <input type="file" class="form-control" name="our_Team_Image" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team Member Email</label>
                                    <input type="email" class="form-control" value="<?php echo $Select_all_team_res_row["our_Team_Email"] ?>" name="Team_Email" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team Member Details</label><br>
                                    <textarea name="Team_Details" rows="5" cols="50"><?php echo $Select_all_team_res_row["our_Team_Details"] ?>"</textarea>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Team Member Work Schedule</label><br>
                                    <input type="datetime-local " value="<?php echo $Select_all_team_res_row["our_Team_Wschedule"] ?>" name="Team_Wschedule" id="exampleInputPassword1">

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Team Member Skills</label>
                                    <input type="text" value="<?php echo $Select_all_team_res_row["our_Team_Skills"] ?>" class="form-control" name="Team_Skills" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Team Member Rates</label>
                                    <input type="number" value="<?php echo $Select_all_team_res_row["our_Team_rates"] ?>" class="form-control" name="Team_Rates" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Services</label>
                                    <select name="Services_Name" class="form-control">
                                        <option> <?php echo $Select_all_team_res_row["Services_Name"] ?></option>
                                        <?php


                                        $Catqurey = "SELECT * FROM `services`";
                                        $Catresult = mysqli_query($conn, $Catqurey);

                                        while ($Catrow = mysqli_fetch_array($Catresult)) { ?>
                                            <option value='<?php echo $Catrow["Service_Name"] ?>'> <?php echo $Catrow["Service_Name"] ?> </option>
                                        <?php
                                        }






                                        ?>
                                    </select>

                                </div>
                                <button type="submit" class="btn btn-primary" name="Add_Team_Memeber">Add Team Member</button>
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