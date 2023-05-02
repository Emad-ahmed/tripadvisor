<?php
include 'config.php';




$id = $_GET['id'];



$insert_product = mysqli_query($conn, "DELETE FROM `alltour` WHERE id = '$id'");


if ($insert_product) {
    echo "<script>alert('Deleted Successfully!!')</script>";
    echo "<script>location.href='pacakge.php'</script>";
} else {
    echo "<script>location.href='pacakge.php'</script>";
}
?>