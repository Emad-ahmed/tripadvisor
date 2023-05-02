<?php
include 'config.php';



$title = $_POST['title'];
$pacakage_time = $_POST['pacakage_time'];
$starting_from = $_POST['starting_from'];
$pirce = $_POST['pirce'];
$overview = $_POST['overview'];
$detail = $_POST['detail'];
$tour_peak_detail	 = $_POST['tour_peak_detail'];
$about_tour = $_POST['about_tour'];
$condition = $_POST['condition'];
$image = $_FILES['image'];
$transportation = $_POST['transportation'];
$accommodation	 = $_POST['accommodation'];
$total_meal = $_POST['total_meal'];
$no_of_person = $_POST['no_of_person'];
$offer_view = $_POST['offer_view'];
$duration = $_POST['duration'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = 'PacakgeImage/' . $imageName;
$imageSave = $imageName;
move_uploaded_file($imageLocation, $imageDes);



$sql = "INSERT INTO `alltour`(`title`, `pacakage_time`, `starting_from`, `pirce`, `overview`, `detail`, `tour_peak_detail`, `about_tour`, `condition`, `status`, `image`, `transportation`, `accommodation`, `total_meal`, `no_of_person`, `offer_view`, `duration`) VALUES ('$title','$pacakage_time','$starting_from','$pirce','$overview','$detail','$tour_peak_detail','$about_tour','$condition','True','$imageDes','$transportation','$accommodation','$total_meal','$no_of_person','$offer_view', '$duration')";



if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Pacakage Inserted!!')</script>";
    echo "<script>location.href='pacakge.php'</script>";
}


