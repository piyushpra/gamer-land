<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "feedback";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
    die("Failed to Connect Database");
} 

else if ($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
    for ($i = 1; $i < 100; $i++) {
        $q = "SELECT `ID` FROM `user_feedback` WHERE ID='$i' LIMIT 1";
        $r = mysqli_query($conn, $q);

        $ro = mysqli_fetch_row($r);
        if ($ro > 0) {
            continue;
        } else {
            if (isset($_POST['feedback'])) {
                $_name = $_POST['name'];
                $_email = $_POST['email'];
                $_subject = $_POST['subject'];
                $_message = $_POST['message'];
        
                $query = "INSERT INTO user_feedback(`ID`, `Name`, `E-mail`, `Subject`, `Message`) VALUES ('$i', '$_name', '$_email', '$_subject', '$_message')";
                $run = mysqli_query($conn, $query);
                $_SESSION['confirm'] = "Thank You for giving us a reply. We'll reply soon";
                header("location:contact");
            }
            break;
        }
    }
}