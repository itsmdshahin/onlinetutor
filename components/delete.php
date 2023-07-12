<?php

include './config.php';

$userId = $_GET['userId'];
$mId = $_GET['mid'];

$select_query = "SELECT level13 FROM tutorlist WHERE id='$mId'";
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_assoc($result);
$imageFilename = $row['level13'];

$delete_query = "DELETE FROM `tutorlist` WHERE id='$mId'";
mysqli_query($conn, $delete_query);

echo $imageFilename;

if (file_exists($imageFilename)) {
    unlink($imageFilename);
}
header("location:home.php?userId=$userId");
