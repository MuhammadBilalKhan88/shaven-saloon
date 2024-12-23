<?php
include("Database/connection.php");
$getid = $_GET['id'];

$qurey = "DELETE FROM `services` WHERE `Service_Id` = '$getid'";
$res = mysqli_query($conn,$qurey);
if($res){
    header("location:manageServices.php");
    
}else{
    echo " <script>alert('Account Not Delete')</script> ";
}

?>