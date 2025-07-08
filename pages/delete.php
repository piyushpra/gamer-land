<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "credential";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(isset($_POST['u-mail']))
{
    $g_mail = $_POST['u-mail'];
    $query = "DELETE FROM `users` WHERE `E-mail`='$g_mail'";
    $exc = mysqli_query($conn, $query);
    header("Location: logout");
}