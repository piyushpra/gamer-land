<?php

session_start();

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "profile";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (isset($_SESSION['mail'])) {
    $email = $_SESSION['mail'];
    $query = "SELECT `Profile-Image` FROM `user-profile` WHERE `E-mail`='$email'";
    $exc = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($exc);

    if (isset($_FILES['user-photo']) && !empty($_FILES['user-photo'])) {
        $_u_photo_name = $_FILES['user-photo']['name'];
        $_u_photo_temp_name = $_FILES['user-photo']['tmp_name'];
        $_u_photo_type = $_FILES['user-photo']['type'];

        $_u_photo_size = $_FILES['user-photo']['size'];

        $_SESSION['user-profile-image'] = $_u_photo_name;

        move_uploaded_file($_u_photo_temp_name, "uploads/" . $_u_photo_name);

        $temp_store = $_SESSION['mail'];

        $query1 = "UPDATE `user-profile` SET `Profile-Image`='$_u_photo_name' WHERE `E-mail`='$temp_store'";
        $exc1 = mysqli_query($conn, $query1);
    }
    header("Location: profile");
} else {
    header("Location: login");
}
