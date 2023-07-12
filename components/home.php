<?php
// Retrieve the ID from the session
session_start();
include './config.php';
$userId = $_GET['userId'];




if (isset($_SESSION['homepage'])) {
    if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];
        $Select_Query_profile = "SELECT * FROM `register` WHERE id='$userId'";
        $Select_Query_profile_result = mysqli_query($conn, $Select_Query_profile);
        if ($Select_Query_profile_result) {
            if ($row = mysqli_fetch_array($Select_Query_profile_result)) {
                $Names = $row['name'];
                $Images = $row['image'];
            } else {
                echo "No recent logins found.";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        //echo $userId;
    } else {
        echo "User ID not found.";
    }
} else {
    echo "<script>alert('LogIn First!')</script>";
    echo "<script>location.href='login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
    <link rel='stylesheet' href='../assets/css/bodys.css'>
    <title>Online Tutor</title>
</head>

<body>

    <div class='container'>
        <div class='navbar'>
            <div class='header-logo'>
            <a href='./home.php?userId=<?php echo $userId ?>'>
                    <h1>Online Tutor</h1>
                </a>
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

        <div>
            <h2> Popular Teacher </h2>
        </div>
        <div class="bodyss">
            <?php
            $cnt = 0;
            include './config.php';
            $all_query = "SELECT * FROM `tutorlist`";
            $alldata = mysqli_query($conn, $all_query);
            echo "<div class='containers'>";
            while ($row = mysqli_fetch_array($alldata)) {
                $cnt = $cnt + 1;
                echo " 
            <div class='cards'>
                <div class='card-headers'>
                    <img src='$row[level13]' alt='rover' />
                </div>
                <div class='card-bodys'>
                    <span class='tags tag-teals'>$row[subject]</span>
                    <h4>
                        $row[title]
                    </h4>
                    <p>
                        $row[bio]
                    </p>
                    <div class='users'>
                        <img src='$row[image]' alt='user' />
                        <div class='user-infos'>
                            <h5>$row[name] <img width='20px' height='20px' src='./image/verified.png'> </h5>
                            <small>2h ago</small>
                        </div>
                    </div>
                    <a href='./previewtutor.php?userId=$userId&email=$row[email]'><span class='tags tag-purple'>Contact Now!</span></a>
                    </div>
            </div>";
                if ($cnt == 3) {
                    break;
                }
            }
            echo "</div>";
            ?>
        </div>
        <div>
            <h2> Teacher List </h2>
        </div>
        <div class="bodyss">
            <?php
            include './config.php';

            $all_query = "SELECT * FROM `tutorlist`";
            $alldata = mysqli_query($conn, $all_query);
            echo "<div class='containers'>";
            while ($row = mysqli_fetch_array($alldata)) {


                echo " 
            <div class='cards'>
                <div class='card-headers'>
                    <img src='$row[level13]' alt='rover' />
                </div>
                <div class='card-bodys'>
                    <span class='tags tag-teals'>$row[subject]</span>
                    <h4>
                        $row[title]
                    </h4>
                    <p>
                        $row[bio]
                    </p>
                    <div class='users'>
                        <img src='$row[image]' alt='user' />
                        <div class='user-infos'>
                            <h6>$row[name] <img width='5px' height='auto' src='./image/verified.png'> </h6> 
                            <small>2h ago</small>
                        </div>
                    </div>
                    <a href='./previewtutor.php?userId=$userId&email=$row[email]'><span class='tags tag-purple'>Contact Now!</span></a>
                    </div>
            </div>";
            }
            echo "</div>";

            ?>
        </div>
        <div class='fotter-col'>
            <p> All Copyright &copy; 2023 </p>
        </div>

    </div>


</body>

</html>