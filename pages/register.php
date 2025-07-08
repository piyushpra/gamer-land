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
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $_username = $_POST['username'];
        $_email = $_POST['email'];
        $_password = md5($_POST['password']);

        if (!empty($_password) && !empty($_email) && !empty($_username)) {
            $sql1 = "SELECT * FROM `users` WHERE `E-mail`='$_email' LIMIT 1";
            $sql2 = "SELECT * FROM `users` WHERE `Username`='$_username' LIMIT 1";

            $query1 = mysqli_query($conn, $sql1);
            $query2 = mysqli_query($conn, $sql2);

            $result1 = mysqli_num_rows($query1);
            $result2 = mysqli_num_rows($query2);

            if ($result1 == 0 && $result2 == 0)
            {
                for ($i = 1; $i < 100; $i++)
                {
                    $q = "SELECT * FROM `users` WHERE `ID`='$i' LIMIT 1";
                    $r = mysqli_query($conn, $q);

                    $ro = mysqli_fetch_row($r);
                    if ($ro > 0) {
                        continue;
                    } else {
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date("Y-m-d h:i:s a");
                        $query = "INSERT INTO `users` (`ID`, `Username`, `E-mail`, `Password`, `Date`) VALUES ('$i', '$_username', '$_email', '$_password', '$date')";
                        $run = mysqli_query($conn, $query);
                        $_SESSION['success'] = "<p>Registeration success &#128077;</p>";
                        break;
                    }
                }
                unset($_SESSION['error1']);
                unset($_SESSION['error2']);
            }
            else if ($result1 > 0)
            {
                $_SESSION['error1'] = "<p>Email already taken &#128517;</p>";

                if ($result2 > 0) {
                    $_SESSION['error2'] = "<p>Username already taken &#128517;</p>";
                }
            }
            else
            {
                $_SESSION['success'] = "Something went wrong &#9995;";
            }
        } else {
            $_SESSION['success'] = "Something went wrong &#9995;";
        }
    } else {
        unset($_SESSION['success']);
        unset($_SESSION['error1']);
        unset($_SESSION['error2']);
    }
}
?>

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
                    <a class="back" href="#"><span class="glyphicon glyphicon-arrow-left" title="Go Back"></span></a>
                    <a class="home" href="../" title="Close">&times;</a>
                    <h2>Register</h2>
                    <?php if (isset($_SESSION['success'])) {
                        $_sc = $_SESSION['success'];
                        echo $_sc;
                    } else {
                        echo "";
                    } ?>
                    <?php if (isset($_SESSION['error1'])) {
                        $_err1 = $_SESSION['error1'];
                        echo $_err1;
                    } else {
                        echo "";
                    } ?>
                    <?php if (isset($_SESSION['error2'])) {
                        $_err2 = $_SESSION['error2'];
                        echo $_err2;
                    } else {
                        echo "";
                    } ?>
                    <form action="register" method="POST" id="my_form1" name="myform">
                        <input class="text" type="text" placeholder="Username" name="username" required>
                        <input class="email" type="email" placeholder="Email" name="email" required>
                        <input class="password" type="password" placeholder="Password" name="password" required>
                    </form>
                    <div class="form_buttons">
                        <button type="submit" form="my_form1" class="register_button" name="register">Register</button>
                        <a href="login" class="login_button">Login</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>