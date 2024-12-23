<?php
include("Database/connection.php");
$apointmentid = $_GET['id'];

$qurey = "DELETE FROM `booking_appointment` WHERE appintmnet_id='$apointmentid'";
$res = mysqli_query($conn,$qurey);
if($res){
    header("location:manageAppointments.php");
}else{
    echo " <script>alert('Appointment Not Delete')</script> ";
}

?>