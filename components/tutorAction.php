
<?php

include './config.php';

$userId = $_GET['userId'];


if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    $Select_Query_profile = "SELECT * FROM `register` WHERE id='$userId'";
    $Select_Query_profile_result = mysqli_query($conn, $Select_Query_profile);
    if ($Select_Query_profile_result) {
        if ($row = mysqli_fetch_array($Select_Query_profile_result)) {
            // $Names = $row['name'];
            // $Emails = $row['image'];
            $Images = $row['image'];
        } else {
            echo "No recent logins found.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>  

<?php
include './config.php';

// $mId = $_GET['userId'];

// echo $userId;
$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$bio = $_POST['bio'];
$description = $_POST['description'];
$subject = $_POST['subject'];
$skill = $_POST['skill'];
$exprience = $_POST['exprience'];
$imageFiles = $_FILES['image'];

// Access file properties
$tmpFilePath = $imageFiles['tmp_name'];
$fileName = $imageFiles['name'];
$fileSize = $imageFiles['size'];
$fileType = $imageFiles['type'];

// Move uploaded file to desired location
$destination = 'image/' . $fileName;
$maxFileSize = 2 * 1024 * 1024; // 2MB
$allowedExtensionsRegex = '/\.(jpg|jpeg|png|gif)$/i';

if (isset($imageFiles)) {
    if ($fileSize <= $maxFileSize && preg_match($allowedExtensionsRegex, $fileName)) {
        $Insert_Query = "INSERT INTO `tutorlist` (name, email, subject, skill, exprience, description, bio, title,level13,image) VALUES ('$name','$email','$subject','$skill','$exprience','$description','$bio','$title','$destination','$Images')";
        // mysqli_query($conn, $Insert_Query);
        // move_uploaded_file($tmpFilePath, $destination);
        if (mysqli_query($conn, $Insert_Query)) {
            echo "<script>alert('Successfully inserted connection.')</script>";
            move_uploaded_file($tmpFilePath, $destination);
            echo "<script>location.href = './home.php?userId=$userId'</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
            echo "<pre>";
            print_r(mysqli_query($conn, $Insert_Query));
            echo "</pre>";
        }
    } else if ($fileSize > $maxFileSize) {
        echo "<script>alert('Invalid image size. File size must not exceed 2MB.')</script>";
        echo "<script>location.href = './tutor.php?userId=$userId'</script>";
    } else {
        $Insert_Query = "INSERT INTO `tutorlist` (name, email, subject, skill, exprience, description, bio, title,level13) VALUES ('$name','$email','$subject','$skill','$exprience','$description','$bio','$title','$destination')";
        // mysqli_query($conn, $Insert_Query);
        // move_uploaded_file($tmpFilePath, $destination);
        if (mysqli_query($conn, $Insert_Query)) {
            echo "<script>alert('Successfully inserted connection.')</script>";
            move_uploaded_file($tmpFilePath, $destination);
            echo "<script>location.href = './home.php?userId=$userId'</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
            echo "<pre>";
            print_r(mysqli_query($conn, $Insert_Query));
            echo "</pre>";
        }
        echo "<script>alert('Invalid image file. Only JPG, JPEG, PNG, and GIF files are allowed.')</script>";
        echo "<script>location.href = './tutor.php?userId=$userId'</script>";
    }
} else {
    echo "<script>alert('No image file uploaded.')</script>";
    //echo "<script>location.href = 'index.php'</script>";
}
?>  