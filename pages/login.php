<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/register.css">
    <script src="../js/project.js"></script>
</head>

<body onload="down_up()">
    <section class="dark_bg">
        <img class="dark_bg_img" src="../images/dark_bg.jpg">
        <div class="orange_bg">
            <div class="main_bg">
                <div class="form_area">
                    <a class="back" href="#"><span class="glyphicon glyphicon-arrow-left"></span></a>
                    <a class="home" href="../">&times;</a>
                    <h2>login</h2>
                    <form action="login" method="POST" id="login" name="myform">
                        <input class="email" type="email" placeholder="Email" name="email" required>
                        <input class="password" type="password" placeholder="Password" name="password" required>
                    </form>
                    <div class="form_buttons">
                        <a href="register" class="register_button">Register</a>
                        <button type="submit" form="login" class="login_button">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>


<?php

if (!isset($_SESSION)) {
    session_start();
}

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "credential";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
    die("Failed to Connect Database");
} else if ($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $_email = $_POST['email'];
        $_password = md5($_POST['password']);

        if (!empty($_email) && !empty($_password)) {
            $sql1 = "SELECT `E-mail`, `Password` FROM `users` WHERE `E-mail`='$_email' AND `Password`='$_password' LIMIT 1";

            $query1 = mysqli_query($conn, $sql1);

            $fetch = mysqli_fetch_assoc($query1);

            $find = $fetch['E-mail'];

            $result1 = mysqli_num_rows($query1);

            if ($result1 == 1) {
                //header("location: project");
                $query = "SELECT `Username`, `E-mail`, `Purchase` FROM `users` WHERE `E-mail`='$find' LIMIT 1";
                $run = mysqli_query($conn, $query);
                $store = mysqli_fetch_assoc($run);

                $_SESSION['username'] = $store['Username'];
                $_SESSION['mail'] = $store['E-mail'];

                $dbhost = "127.0.0.1";
                $dbuser = "root";
                $dbpass = "";
                $db = "item-order";

                $conn_p = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

                $q_f_p = "SELECT COUNT('E-mail') as count FROM `order-details` WHERE `E-mail`='$find'";
                $run_p = mysqli_query($conn_p, $q_f_p);
                $store_p = mysqli_fetch_assoc($run_p);

                $_SESSION['count_p'] = $store_p['count'];

                $dbhost = "127.0.0.1";
                $dbuser = "root";
                $dbpass = "";
                $db = "profile";

                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

                $login_in_mail = $store['E-mail'];

                $sql = "SELECT * FROM `user-profile` WHERE `E-mail`='$login_in_mail'";
                $exc = mysqli_query($conn, $sql);
                $fetch = mysqli_fetch_assoc($exc);

                $_SESSION['name'] = $fetch['Name'];
                $_SESSION['lastname'] = $fetch['Lastname'];
                $_SESSION['country'] = $fetch['Country'];
                $_SESSION['language'] = $fetch['Language'];
                $_SESSION['p-image'] = $fetch['Profile-Image'];
                $_SESSION['mobile'] = $fetch['Mobile'];
                $_SESSION['add-1'] = $fetch['Address-1'];
                $_SESSION['add-2'] = $fetch['Address-2'];
                $_SESSION['postal'] = $fetch['Postal'];
                $_SESSION['city'] = $fetch['City'];

                if (!empty($fetch['Profile-Image'])) {
                    $_SESSION['user-profile-stored-photo'] = $fetch['Profile-Image'];
                } else {
                    $_SESSION['user-profile-stored-photo'] = "";
                }
            } else {
                echo "<script>alert('Something went wrong please login again')</script>";
            }
        }
    }
}
