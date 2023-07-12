<?php
// Retrieve the ID from the session
$userId = $_GET['userId'];

// echo $userId;
// session_start();
// $_SESSION[name] = value;
// echo $_SESSION[name];

// session_destroy(); 
// session_unset();

session_start();

if (isset($_SESSION['homepage'])) {
    if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];
        //echo $userId;
    } else {
        echo "User ID not found.";
    }
    // echo "<br> <a href='logout.php'> <input type='logout' value='logout' name='logout'> </a>";
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

        <div>
            <h2> Teachers </h2>
        </div>
        <?php

        include './config.php';

        $all_query = "SELECT * FROM `tutorlist`";
        $alldata = mysqli_query($conn, $all_query);
        echo "<div class='card-div'>";
        while ($row = mysqli_fetch_array($alldata)) {

            echo "
                <div class='card-main'>
                    <div class='card-img-div'>
                        <img src='$row[image]' alt='Profile'>
                    </div>
                    <div class='card-des-div'>
                        <h4>$row[name]</h4>
                        
                    </div>
                    <div class='card-des-div'>
                        <p>Skill: $row[skill]<br>
                        5 START REVIEW<br>
                        $row[email]<br>
                        $row[subject]<br>
                        $row[exprience]<br>
                        $row[venue]<br>
                        $row[froms]<br>
                        $row[reviews]<br>
                        $row[bio]</p>
                    </div>
                    <div style='margin: 24px 0;'>
                        <a href='#'><i class='fa fa-dribbble'></i></a> 
                        <a href='#'><i class='fa fa-twitter'></i></a>  
                        <a href='#'><i class='fa fa-linkedin'></i></a>  
                        <a href='#'><i class='fa fa-facebook'></i></a> 
                    </div>
                    <div class='card-footer-div'>
                       <p><button>Contact Now</button></p>
                    </div>
                </div> 
            ";
        }
        echo "</div>";


        ?>
        <div>
            <h2> Skill builder </h2>
        </div>
        <div class="bodyss">
            <?php
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
                            <h5>$row[name]</h5>
                            <small>2h ago</small>
                        </div>
                    </div>
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