<?php

session_start();

$g_name = "";
$sell = 1;

if (isset($_SESSION['username']) && isset($_SESSION['mail'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mob = $_POST['mobile'];
    $add = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal = $_POST['postal'];
    $card_num = $_POST['card-num'];
    $card_mon_year = $_POST['card-mon-year'];
    $card_cvv = $_POST['card-cvv'];
    for ($q = 0; $q < sizeof($_SESSION['array']); $q++) {
        $names = ($_SESSION['array'][$q][0]).", ";
        $g_name .= $names;
        $sell_amts = $_SESSION['array'][$q][1].", ";
        $sell .= $sell_amts;
        $_SESSION['purchase'] = $_SESSION['purchase'] + 1;
    }
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $db = "item-order";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if (!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
        die("Failed to Connect Database");
    } else if ($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
        for ($i = 1; $i < 100; $i++) {
            $q = "SELECT `ID` FROM `order-details` WHERE ID='$i' LIMIT 1";
            $r = mysqli_query($conn, $q);

            $ro = mysqli_fetch_row($r);
            if ($ro > 0) {
                continue;
            } else {
                $sql = "INSERT INTO `order-details` (`ID`, `Name`, `E-mail`, `Address`, `City`, `State`, `Postal`, `Mobile`, `Card_Number`, `Card_Mon_Year`, `Card_CVV`, `Game-Name`, `Game-Price`) 
                    VALUES ('$i', '$name', '$email', '$add', '$city', '$state', '$postal', '$mob', '$card_num', '$card_mon_year', '$card_cvv', '$g_name', '$sell')";

                $exc = mysqli_query($conn, $sql);
                break;
            }
        }

        $dbhost = "127.0.0.1";
        $dbuser = "root";
        $dbpass = "";
        $db = "credential";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d h:i:s a");
        $t_pur = $_SESSION['purchase'];
        $sql = "UPDATE `users` SET `Purchase`='$t_pur', `Update_Time`='$date'";
        $exc = mysqli_query($conn, $sql);
    }
    $_SESSION['arr'] = [];
    header("location: store.php?all=1");
} else {
    header("location: register");
}
