<?php
include("Database/connection.php");
$getid = $_GET['id'];

$qurey = "DELETE FROM `contactus` WHERE contact_UId='$getid'";
$res = mysqli_query($conn,$qurey);
if($res){
    header("location:manageContact.php");
    
}else{
    echo " <script>alert('Account Not Delete')</script> ";
}

?>