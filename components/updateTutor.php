
<?php

include './config.php';

$userId = $_GET['userId'];
$mId = $_GET['mid'];


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
       // $Insert_Query = "INSERT INTO `tutorlist` (name, email, subject, skill, exprience, description, bio, title,level13,image) VALUES ('$name','$email','$subject','$skill','$exprience','$description','$bio','$title','$destination','$Images')";
        $update_query = "UPDATE `tutorlist` SET `subject`='$subject',`skill`='$skill',`exprience`='$exprience',`description`='$description',`bio`='$bio',`title`='$title',`level13`='$destination' WHERE id='$mId'";

        if (mysqli_query($conn, $update_query)) {
            echo "<script>alert('Successfully inserted connection.')</script>";
            move_uploaded_file($tmpFilePath, $destination);
            echo "<script>location.href = './home.php?userId=$userId'</script>";
        } else {
            // echo "Error: " . mysqli_error($conn);
            // echo "<pre>";
            // print_r(mysqli_query($conn, $Insert_Query));
            // echo "</pre>";
            echo "<script>location.href = './update.php?userId=$userId'</script>";
        }
    } else if ($fileSize > $maxFileSize) {
        echo "<script>alert('Invalid image size. File size must not exceed 2MB.')</script>";
        echo "<script>location.href = './update.php?userId=$userId'</script>";
    } else {
        $update_query = "UPDATE `tutorlist` SET `subject`='$subject',`skill`='$skill',`exprience`='$exprience',`description`='$description',`bio`='$bio',`title`='$title' WHERE id='$mId'";

        if (mysqli_query($conn, $update_query)) {
            echo "<script>alert('Successfully inserted connection.')</script>";
            move_uploaded_file($tmpFilePath, $destination);
            echo "<script>location.href = './home.php?userId=$userId'</script>";
        } else {
            echo "<script>location.href = './update.php?userId=$userId'</script>";
        }
        echo "<script>alert('Invalid image file. Only JPG, JPEG, PNG, and GIF files are allowed.')</script>";
        echo "<script>location.href = './update.php?userId=$userId'</script>";
    }
} else {
    echo "<script>alert('No image file uploaded.')</script>";
    echo "<script>location.href = 'home.php?userId=$userId'</script>";
}
?>  