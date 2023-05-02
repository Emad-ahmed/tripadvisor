<?php 

include 'config.php';
session_start();

if(isset($_POST['login'])){
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $check_email = "SELECT * FROM user WHERE mobile = '$mobile'";
    $res = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if(password_verify($password, $fetch_pass)){
            $_SESSION['mobile'] = $mobile;
            $status = $fetch['status'];
            if($status == 'verified'){
              $_SESSION['mobile'] = $mobile;
              $_SESSION['password'] = $password;
              header('location: index.php');
            } 
            else{
                $info = "It's look like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                header('location: user-otp.php');
            }
        }else{
            
            echo "<script>alert('Incorrect email or password!!')</script>";
            echo "<script>location.href = 'login.php'</script>";
        }
    } elseif($mobile=="01312240069" && $password == "12345")
    {
        header('location: admin/index.php');
    }
    else{
       
        echo "<script>alert('It's look like you're not yet a member! Click on the bottom link to signup.!!')</script>";
        echo "<script>location.href = 'login.php'</script>";
    }
}
?>