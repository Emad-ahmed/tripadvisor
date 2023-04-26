<?php 
include 'config.php';


if(isset($_POST['check'])){
 
    $_SESSION['info'] = "";
    $otp_code = $_POST['otp'];
    $check_code = "SELECT * FROM user WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE user SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($conn, $update_otp);
        if($update_res){
            $_SESSION['email'] = $email;
            header('location: index.php');
            exit();
        }else{
           
            echo "<script>alert('Failed while updating code!')</script>";
            echo "<script>location.href = 'signup.php'</script>";
        }
    }else{
        echo "<script>alert('You've entered incorrect code!')</script>";
        echo "<script>location.href = 'signup.php'</script>";
    }
}

?>