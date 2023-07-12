<?php

include './config.php';


//$select_Query = "SELECT * FROM `register`";
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    //echo $userId;
    $select_Query = "SELECT * FROM `register` WHERE id='$userId'";
    $select_Query_Result = mysqli_query($conn, $select_Query);
    if ($select_Query_Result) {
        if ($row = mysqli_fetch_array($select_Query_Result)) {
            $name = $row['name'];
            $image = $row['image'];
            $email = $row['email'];
            $username = $row['username'];
            $mobile = $row['mobile'];

            // echo "Name: $name<br>";
            // echo "Image: $image<br>";
            // echo "Email: $email<br>";
            // echo "Username: $username<br>";
            // echo "Mobile: $mobile<br>";
        } else {
            echo "No recent logins found.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: " . mysqli_error($conn);
}



?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
    <link rel='stylesheet' href='../assets/css/style.css'>
    <title>Online Tutor</title>
</head>

<body>

    <div class='container'>
        <div class='navbar'>
            <div class='header-logo'>
                <h1>Online Tutor</h1>
            </div>
            <div class='header-menu'>
                <ul>
                    <li> <a href='./home.php?userId=<?php echo $userId ?>'> Home </a> </li>
                    <li> <a href='./Teacher.php?userId=<?php echo $userId ?>'> Teacher </a> </li>
                    <li> <a href='./tutor.php?userId=<?php echo $userId ?>'> Become Tutor </a> </li>
                    <li><a href='./profile.php?userId=<?php echo $userId ?>'>Profile</a></li>
                    <li> <a href='./logout.php'> Logout</a> </li>
                </ul>
            </div>
        </div>

        <div id='container'>
            <h1>Be come a tutor</h1>
            <form action="inserttutor.php" method="POST" enctype="multipart/form-data">
                <div class="md-3 lg-6 sm-12">
                    <label>Name: </label>
                    <input type="text" name="p_name" require>
                    <br>
                </div>
                <div class="md-3 lg-6 sm-12">
                    <label>Email: </label>
                    <input type="text" name="p_email" require>
                    <br>
                </div>
                <div class="md-3 lg-6 sm-12">
                    <label>Subject: </label>
                    <input type="text" name="p_subject" placeholder="CSE" require>
                    <br>
                </div>
                <div class="md-3 lg-6 sm-12">
                    <label>Skill: </label>
                    <input type="text" name="p_skill" placeholder="C++" require>
                    <br>
                </div>
                <div class="md-3 lg-6 sm-12">
                    <label>Exprience: </label>
                    <input type="text" name="p_exprience" placeholder="5 year" require>
                    <br>
                </div>
                <div class="md-3 lg-6 sm-12">
                    <label>Desciption: </label>
                    <input type="text" name="p_venue" placeholder="Description" require>
                    <br>
                </div>
                <div class="md-3 lg-6 sm-12">
                    <label>from: </label>
                    <input type="text" name="p_from" placeholder="LU" require>
                    <br>
                </div>
                <div class="md-3 lg-6 sm-12">
                    <label>Reviews: </label>
                    <input type="text" name="p_review" placeholder="5 Star" require>
                    <br>
                </div>
                <div class='md-3 lg-6 sm-12'>
                    <label>Image: </label>
                    <input type="file" id="u_image" name="u_image" require>
                    <br>
                </div>
                <div class='md-3 lg-6 sm-12'>
                    <label>preview Image: </label>
                    <img id='preview_image' width='100px' src='<?php echo $row['image'] ?>' alt='Photo'>
                    <br>
                </div>
                <br>
                <button type='submit' class='btn btn-primary'><a href='./inserttutor.php?userId= <?php echo $userId ?>'> Complete </a></button>
            </form>
        </div>

        <div class='fotter-col'>
            <p> All Copyright &copy; 2023 </p>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#u_image').change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>

</body>

</html>