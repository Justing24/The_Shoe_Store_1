<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="topnav">
        <div class="left">
            <a href="home.php"><img src="./images/logo.jpg" class="logo"></a>
        </div>
        <div class="topnav-right">
            <?php
            
            $conn = openConnection();

            $upid = $_SESSION['UPID'];
            $userProfile = $conn->query("SELECT * FROM `user_profile` WHERE UPID= '$upid'")->fetch_assoc();

            echo "<div class='dropdown'>
        <a><div class='name'>Welcome " . $userProfile['first_name'] . ' ' . $userProfile['last_name'] . "  </div></a>
        </div>";
            ?>
            <a><input type="button" class="login-button" value="Logout" onclick="location.href='logout.php';"></a>
        </div>
    </div>


