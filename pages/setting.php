<?php

if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>GAMER|LAND</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/gamerland-logo-light.png">
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

    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">

    <link rel="stylesheet" href="setting.css">
    <link rel="stylesheet" href="header.css">
    <script src="project.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="disable-select" onscroll="scroll1()">
    <?php include("header.php"); ?>

    <section class="settings">
        <img class="zoom-bg" src="images/battle_image_2.jpg">
        <div class="set container">
            <form class="dat col-12 col-lg-6" method="POST" action="pass-reset">
                <h3 class="change-pass-head">change password</h3>
                <div class="detail">
                    <label class="label-head">current password</label>
                    <input class="pass" type="password" name="current_password" placeholder="Current Password">
                </div>
                <div class="detail">
                    <label class="label-head">new password</label>
                    <input class="pass" type="password" name="new_password" placeholder="New Password">
                </div>
                <div class="detail">
                    <label class="label-head">re-type password</label>
                    <input class="pass" type="password" name="re-type_password" placeholder="Re-type Password">
                </div>
                <div class="chnage-pass">
                    <input class="update" type="submit" name="submit" placeholder="Submit">
                </div>
            </form>
            <div class="meaning col-12 col-lg-6">
                <label class="meaning-head">your password</label>
                <ul class="pass-intruction">
                    <li class="inst">your new password must not be the same as your all last passwords</li>
                    <li class="inst">your password must have 7+ characters</li>
                    <li class="inst">your password must have at least 1 number</li>
                    <li class="inst">your password must contain no spaces</li>
                </ul>
            </div>
        </div>
        <div class="del container">
            <form method="POST" action="delete">
                <h3 class="del-head">delete account</h3>
                <div class="del-acc">
                    <p>Click "Submit" to permanently deleting your GamerLand account
                        including all personal information, purchases, game progress and in-game content.
                    </p>
                    <?php 
                    
                    if(isset($_SESSION['mail']))
                    {
                        $m = $_SESSION['mail'];
                        echo "
                        <input type='hidden' value='$m' name='u-mail'>
                        ";
                    }
                    ?>
                    <input class="del-acc-btn" type="submit" name="del-account" value="Delete Account">
                </div>
            </form>
        </div>
    </section>

</body>

</html>