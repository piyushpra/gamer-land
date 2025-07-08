<?php

session_start();

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "cart";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(isset($_SESSION['mail']) && isset($_SESSION['g-name']) && isset($_SESSION['g-sell-price']))
{
    $mail = $_SESSION['mail'];
    $name = $_SESSION['g-name'];
    $sell = $_SESSION['g-sell-price'];
    $sql = "INSERT INTO `product-cart`(`E-mail`, `Product`, `Price`) VALUES ('$mail', '$name', '$sell')";
    $exc = mysqli_query($conn, $sql);
    header("location: store.php?all=1");
}

else
{
    header("location: register.php");
}