<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include '_dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // Check whether this email exists
    $existSql = "Select * from `users` where user_email = '$user_email' ";
    $result = mysqli_query($conn,$existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        // $showAlert = "Email already in use";
        echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
        <strong>Error! </strong> Email already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result){
                $showAlert = true;
                header("Location: /forum/index.php/?signupsuccess=true");
                exit();
            }
        }
        else{
            $showAlert = "Password does not match";
        }
    }

    header("Location: /forum/index.php/?signupsuccess=false&error=$showError");



}


?>