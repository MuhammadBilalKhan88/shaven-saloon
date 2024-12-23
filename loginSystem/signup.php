<?php




include("admin/Database/connection.php");



if (isset($_POST['regsterBtn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['userName']);
    $email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $password = $_POST['userPassword'];
    $confirm_password = $_POST['confrimPassword'];
    

    $passwordHash  = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();
    if (empty($name) or empty($email) or empty($password) or empty($confirm_password)) {
        array_push($errors, "All Filed Are Required");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        array_push($errors, "Email is not Valid");
    }

    if (strlen($password) < 6) {
        array_push($errors, "Password Must be 6 letter long ");
    }

    if ($password !== $confirm_password) {
        array_push($errors, "Password Does Not Match");
    }


    $sql = "SELECT * FROM users WHERE  email='$email'";
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_num_rows($result);
    if($rowCount>0){
        array_push($errors, "Email is already existis");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo"<div class='alert alert-danger'>$error</div>" ;
         
        }
    } else {
      
        $sql = "INSERT INTO `users`( `name`, `email`, `paswword`) VALUES (?,?,?)";
        $stmt  = mysqli_stmt_init($conn);
        $prepareStmt   = mysqli_stmt_prepare($stmt , $sql);
        if($prepareStmt){
            mysqli_stmt_bind_param($stmt,"sss",$name,$email,$passwordHash);
            mysqli_stmt_execute($stmt);
            echo"<div class='alert alert-success'>You are registered Successfully. <a href='login.php'>Login</a></div>" ;
           

        }else{
            die("somthing went wrong");
        }


    }
}

?>