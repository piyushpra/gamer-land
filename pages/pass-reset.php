<?php

if (!isset($_SESSION)) {
    session_start();
}

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "credential";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (isset($_SESSION['mail'])) {
    if (isset($_POST['current_password'])) {
        $ug_pass = $_POST['current_password'];
    } else {
        $ug_pass = "";
    }
    $u_mail = $_SESSION['mail'];
    $query = "SELECT `Password` FROM `users` WHERE `E-mail`='$u_mail'";
    $exc = mysqli_query($conn, $query);
    $fetch = mysqli_fetch_assoc($exc);

    if ($fetch['Password'] == $ug_pass) {
        if (isset($_POST['new_password']) && isset($_POST['re-type_password'])) {
            if (!empty($_POST['new_password']) && !empty($_POST['re-type_password'])) {
                $cor_pass = $_POST['new_password'];
                if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $cor_pass)) {
                    $enc_pass = md5($cor_pass);
                    $sql = "UPDATE `users` SET `Password`='$enc_pass' WHERE `E-mail`='$mail'";
                    $run = mysqli_query($conn, $sql);
                }
            }
        }
    }
}