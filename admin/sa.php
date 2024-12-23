<?php
if (isset($_POST['addservice'])) {
    // Service Name Start 
    $Service_Name =  $_POST['Service_Name'];
    $Service_Details =  $_POST['Service_Details'];
    $Service_Name_Rspace = preg_replace('/\s+/', '', $Service_Name);
    // Service Name Start


      // Service Image Handling
      $Service_Image_FName = $row2['Service_Image']; 
      if (!empty($_FILES['Service_Image']['name'])) {
          $Service_Image = $_FILES['Service_Image'];
          $Service_Image_Name = $Service_Image['name'];
          $Service_Image_FName = $Service_Name_Rspace . "-" . $date . "-" . $millisecond . "-" . $Service_Image_Name;
          move_uploaded_file($Service_Image['tmp_name'], "../images/services/" . $Service_Image_FName);
      }
  
      // White Service Image Handling
      $White_Service_Image_FName = $row2['White_Service_Image']; // Default to existing image
      if (!empty($_FILES['White_Service_Image']['name'])) {
          $White_Service_Image = $_FILES['White_Service_Image'];
          $White_Service_Image_Name = $White_Service_Image['name'];
          $White_Service_Image_FName = $Service_Name_Rspace . "-" . $date . "-" . $millisecond . "-" . $White_Service_Image_Name;
          move_uploaded_file($White_Service_Image['tmp_name'], "../images/whiteservices/" . $White_Service_Image_FName);
      }
  

    if($Service_Image_Name==null){
        $get_service_image ="SELECT Service_Image FROM services WHERE  Service_Id='$getid'";
        $result = mysqli_query($conn,$get_service_image);
        $row = mysqli_fetch_array($result);
        $category_Final_Image_Name = $row['Service_Image'];
    }
    if($White_Service_Image_Name==null){
        $get_Wservice_image ="SELECT White_Service_Image FROM services WHERE  Service_Id='$getid'";
        $result = mysqli_query($conn,$get_Wservice_image);
        $row = mysqli_fetch_array($result);
        $category_Final_Image_Name = $row['White_Service_Image'];
    }


    $qurey = "UPDATE services SET Service_Name='$Service_Name',Service_Details='$Service_Details',Service_Image='$Service_Image_FName',White_Service_Image='$White_Service_Image_FName' WHERE Service_Id='$getid'";
    $res = mysqli_query($conn, $qurey);
    if (!$res2 && !$res) {
        echo "Error" . "-" . mysqli_errno($conn);
    }
    if ($res) {
        header("location:manageServices.php");
    } else {
        echo "<script>alret('Try Again...')</script>";
    }
}
?>