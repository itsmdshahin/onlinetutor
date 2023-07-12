<?php 

include '../../components/config.php';
$id = $_GET['id'];

$select_query = "SELECT image FROM product WHERE id='$id'";
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_assoc($result);
$imageFilename = $row['image'];

$delete_query = "DELETE FROM `product` WHERE id='$id'";
mysqli_query($conn,$delete_query);

// echo $imageFilename;

if(file_exists($imageFilename)){
    unlink($imageFilename);
}
header("location:index.php");
