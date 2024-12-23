<?php
include("Database/connection.php");
$getid = $_GET['id'];

$qurey = "DELETE FROM `saloon_feedback` WHERE `feedback_Id`= '$getid'";
$res = mysqli_query($conn,$qurey);
if($res){
    header("location:manageFeedback.php");
    
}else{
    echo " <script>alert('Account Not Delete')</script> ";
}

?>