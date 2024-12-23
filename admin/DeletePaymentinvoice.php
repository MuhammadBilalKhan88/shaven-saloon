<?php
include("Database/connection.php");
$paymentid = $_GET['id'];

$qurey = "DELETE FROM `payment_paypal` WHERE id='$paymentid'";
$res = mysqli_query($conn,$qurey);
if($res){
    header("location:payment.php");
}else{
    echo " <script>alert('Payment Invoice  Not Delete')</script> ";
}

?>