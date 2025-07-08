<?php

if(!isset($_SESSION))
{
    session_start();
}

$file = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

if ($file == "store.php" || $file == "buy.php") {
    $active1 = "active";
    $active2 = "";
    $active3 = "";
    $active4 = "";
    $active5 = "";
}

if ($file == "blog.php") {
    $active1 = "";
    $active2 = "active";
    $active3 = "";
    $active4 = "";
    $active5 = "";
}

if ($file == "contact.php") {
    $active1 = "";
    $active2 = "";
    $active3 = "active";
    $active4 = "";
    $active5 = "";
}

if ($file == "register.php") {
    $active1 = "";
    $active2 = "";
    $active3 = "";
    $active4 = "active";
    $active5 = "";
}

if ($file == "index.php") {
    $active1 = "";
    $active2 = "";
    $active3 = "";
    $active4 = "";
    $active5 = "active";
    $address = "";
    $page = "pages/";
}

else {
    $address = "../";
    $page = "";
}

?>