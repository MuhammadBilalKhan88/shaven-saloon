<?php
include("Database/connection.php");
$Team_Id = $_GET['id'];

$qurey = "call delete_shaven_team($Team_Id)";
$res = mysqli_query($conn,$qurey);
if($res){
    header("location:manageTeam.php");
    
}else{
    echo " <script>alert('Account Not Delete')</script> ";
}

?>