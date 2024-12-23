<?php
include("Database/connection.php");
$getid = $_GET['id'];

$qurey = "DELETE FROM `users` WHERE id='$getid'";
$res = mysqli_query($conn,$qurey);
if($res){
    header("location:manageuser.php");
}else{
    echo " <script>alert('Account Not Delete')</script> ";
}

?>