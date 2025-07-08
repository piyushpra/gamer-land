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
    <link rel="icon" href="../images/gamerland-logo-light.png">
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

    <link rel="stylesheet" href="../css/contact.css">
    <script src="../js/project.js"></script>
    <script src="../js/buy.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="disable-select">
    <div class="loader"></div>
    <?php include("header.php"); ?>

    <div class="contact_us container">
    </div>
    <section class="contact">
        <div class="contact_inner">
            <div class="contact_more_details container">
                <div class="contact_details">
                    <p class="contact_head">contact us</p>
                    <p class="contact_para">
                        <span class="contact_address_head">address :</span> <span class="contact_address">abc Haryana, India, Area-Code: 122001</span>
                    </p>
                    <p class="contact_para">
                        <span class="contact_phone">phone number :</span> 1234567890
                    </p>
                    <p class="contact_para">
                        <span class="contact_mail_head">e-mail :</span> <span class="contact_mail">abc123@gmail.com</span>
                    </p>
                    <p class="contact_list">
                        <a class="contact_item1" href="###8"><i class="fab fa-facebook-f"></i></a>
                        <a class="contact_item2" href="###9"><i class="fab fa-twitter"></i></a>
                        <a class="contact_item3" href="####1"><i class="fab fa-linkedin-in"></i></a>
                        <a class="contact_item4" href="####1"><i class="fab fa-youtube"></i></a>
                    </p>

                </div>
                <form class="contact_for_reply" method="POST" action="feedback.php">
                    <p class="reply_head">
                        leave a reply
                    </p>
                    <div class="contact_name_email">
                        <input type="text" placeholder="Name" name="name">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <input type="text" placeholder="Subject" name="subject">
                    <textarea name="message" placeholder="Message" name="message"></textarea>
                    <button type="submit" class="reply_button" name="feedback">send reply</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>