<?php
include 'config.php';


$mobile = $_SESSION['mobile'];

$dataFetchQuery = "SELECT * FROM `user` WHERE mobile = '$mobile'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);
$user_id = $data['id'];

$divsionfrom = $_POST['divsionfrom'];
$divsionto = $_POST['divsionto'];
$transportlist = $_POST['transportlist'];
$paribhantlist = $_POST['paribhantlist'];
$farelist = $_POST['farelist'];
$startDate = $_POST['startDate'];
$endtDate = $_POST['endtDate'];
$inputCalcBox = $_POST['inputCalcBox'];
$fareprice = $_POST['fareprice'];
$totalprice = $_POST['totalprice'];


$sql = "INSERT INTO `reserve_transport`(`user`, `from`, `to`, `transportation`, `transportation_list`, `trip_date`, `return_date`, `fare_type`, `number_of_seat`, `fare_price`, `total_price`, `status`) VALUES ('$user_id','$divsionfrom','$divsionto','$transportlist','$paribhantlist','$startDate','$endtDate','$farelist','$inputCalcBox','$fareprice','$totalprice','False')";



if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Resource Inserted!!')</script>";
    echo "<script>location.href='customzied.php'</script>";
}


