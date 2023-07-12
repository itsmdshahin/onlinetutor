<?php
include '../../components/config.php';
$Product_Name = $_POST['p_name'];
$Product_Prize = $_POST['p_prize'];
$Product_img = $_FILES['p_image'];

// echo $Product_Name." ".$Product_Prize."<br>";
// echo "<pre>";
//  print_r($Product_img);
// echo "</pre>";

if ($Product_Name === '' || $Product_Prize === '') {
    echo "<script>alert('Fill up the form')</script>";
    echo "<script>location.href = 'index.php'</script>";
} else if (isset($_FILES['p_image'])) {
    $imageLocation = $_FILES['p_image']['tmp_name'];
    $imageName = $_FILES['p_image']['name'];
    $imageSize = $_FILES['p_image']['size'];
    $imageDestination = "img/" . $imageName;
    // $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    // $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    $maxFileSize = 2 * 1024 * 1024; // 2MB
    $allowedExtensionsRegex = '/\.(jpg|jpeg|png|gif)$/i';
    if ($imageSize <= $maxFileSize && preg_match($allowedExtensionsRegex, $imageName)) {
        // if (in_array($imageExtension, $allowedExtensions)) {
        //     echo "OK IS OK !";
        //echo $imageDestination;

        $insert_query = "INSERT INTO `product`(`name`, `prize`, `image`) VALUES ('$Product_Name','$Product_Prize','$imageDestination')";

        if (mysqli_query($conn, $insert_query)) {
            echo "<script>alert('Sucessfully Insert connection.')</script>";
            // echo "<script>location.href = 'index.php'</script>";
        }
        move_uploaded_file($imageLocation, $imageDestination);
        echo "<script>alert('Sucessfully Insert.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else if ($imageSize > $maxFileSize) {
        echo "<script>alert('Invalid image size not more thrn 2MB.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Invalid image file. Only JPG, JPEG, PNG, and GIF files are allowed.')</script>";
        echo "<script>location.href = 'index.php'</script>";
    }
} else {
    echo "<script>alert('No Image file uploded')</script>";
    echo "<script>location.href = 'index.php'</script>";
}
