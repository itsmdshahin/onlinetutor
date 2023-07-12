<?php
include '../../components/config.php';

$id = $_POST['id'];
$Product_Name = $_POST['u_name'];
$Product_Prize = $_POST['u_prize'];
//


$select_Query = "SELECT `image` FROM `product` WHERE id='$id'";
$select_Query_result = mysqli_query($conn, $select_Query);
$rst = mysqli_fetch_array($select_Query_result);
$image = $rst['image'];
$previousImage = $rst['image'];

if ($Product_Name === '' || $Product_Prize === '') {
    echo "<script>alert('Fill up the form')</script>";
    echo "<script>location.href = 'update.php'</script>";
} else if ($rst) {
    $imageLocation = $_FILES['u_image']['tmp_name'];
    $imageName = basename($_FILES['u_image']['name']);
    $imageSize = $_FILES['u_image']['size'];
    $imageDestination = "img/" . $imageName;
    $maxFileSize = 2 * 1024 * 1024; // 2MB
    $allowedExtensionsRegex = '/\.(jpg|jpeg|png|gif)$/i';

    $update_query = "UPDATE `product` SET `name`='$Product_Name',`prize`='$Product_Prize',`image`='$imageDestination' WHERE id = '$id'";

    if ($imageSize <= $maxFileSize && preg_match($allowedExtensionsRegex, $imageName)) {
        echo $Product_Name . " " . $Product_Prize . " " . $imageLocation . " ++ " . $imageSize;

        // Delete previous image
        if (!empty($previousImage) && file_exists($previousImage)) {
            unlink($previousImage);
        }

        if (mysqli_query($conn, $update_query)) {
            //echo "<script>alert('Successfully Insert connection.')</script>";
            move_uploaded_file($imageLocation, $imageDestination);
            echo "<script>alert('Successfully Insert.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        } else {
            echo "<script>alert('Failed to update the product.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }
    } else if ($imageSize > $maxFileSize) {
        echo "<script>alert('Invalid image size not more than 2MB.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else {
        $update_query = "UPDATE `product` SET `name`='$Product_Name',`prize`='$Product_Prize' WHERE id = '$id'";
        if (mysqli_query($conn, $update_query)) {
            //echo "<script>alert('Successfully Insert connection.')</script>";
            move_uploaded_file($imageLocation, $imageDestination);
            echo "<script>alert('Successfully Insert.')</script>";
            echo "<script>location.href = 'index.php'</script>";
        }
        //echo "<script>alert('Invalid image file. Only JPG, JPEG, PNG, and GIF files are allowed.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    }
} else {
    echo "<script>alert('Failed to update the product.')</script>";
    echo "<script>location.href = 'index.php'</script>";
}
