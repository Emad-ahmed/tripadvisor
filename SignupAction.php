<?php
include 'config.php';

$email = "";

$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile_number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $divisions = mysqli_real_escape_string($conn, $_POST['divisions']);
    $distr = mysqli_real_escape_string($conn, $_POST['distr']);
    $polic_sta = mysqli_real_escape_string($conn, $_POST['polic_sta']);
    
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        echo "<script>alert('Email that you have entered is already exist!')</script>";
        echo "<script>location.href = 'signup.php'</script>";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `mobile`, `division`, `district`, `police_station`, `status`, `code`, `password`) VALUES ('$fname','$lname','$email','$mobile','$divisions','$distr','$polic_sta','$status','$code','$encpass')";
        $data_check = mysqli_query($conn, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: luresource22@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                echo "<script>alert('Failed while sending code!!')</script>";
                echo "<script>location.href = 'signup.php'</script>";
            }
        }else{
            echo "<script>alert('Failed while inserting data into database!!')</script>";
            echo "<script>location.href = 'signup.php'</script>";
        }
    }
}

?>