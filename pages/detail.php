<?php

session_start();

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "profile";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

$temp_store = $_SESSION['mail'];

$sql0 = "SELECT * FROM `user-profile` WHERE `E-mail`='$temp_store'";
$sql01 = "SELECT COUNT(*) as count FROM `user-profile`";

$exc0 = mysqli_query($conn, $sql0);
$exc01 = mysqli_query($conn, $sql01);

$row = mysqli_fetch_row($exc0);

$fetch0 = mysqli_fetch_assoc($exc01);
$fetch_t_rows = $fetch0['count'];

for ($i = 1; $i <= $fetch_t_rows + 1; $i++) {
    $q = "SELECT * FROM `user-profile` WHERE `ID`='$i' LIMIT 1";
    $r = mysqli_query($conn, $q);

    $ro = mysqli_num_rows($r);
    if ($ro > 0) {
        continue;
    } else {
        $_u_p_mail = $_SESSION['mail'];
        $q_p = "SELECT * FROM `user-profile` WHERE `E-mail`='$_u_p_mail' LIMIT 1";
        $r_p = mysqli_query($conn, $q_p);
        //$_s_d = mysqli_fetch_row($r_p);
        if (mysqli_fetch_row($r_p) == 0) {
            $_nam = $_POST['name'];
            $_last = $_POST['lastname'];
            $_mail = $_SESSION['mail'];
            $_mob = $_POST['mobile'];
            $_country = $_POST['country'];
            $_lan = $_POST['languages'];
            $_add_2 = $_POST['address-1'];
            $_add_1 = $_POST['address-2'];
            $_postal = $_POST['postal'];
            $_city = $_POST['city'];

            $sql = "INSERT INTO `user-profile` (`ID`, `Name`, `E-mail`, `Lastname`, `Country`, `Language`, `Mobile`, `Address-1`, `Address-2`, `Postal`, `City`) VALUES ('$i', '$_nam', '$_mail', '$_last', '$_country', '$_lan', '$_mob', '$_add_1', '$_add_2', '$_postal', '$_city')";
            $run = mysqli_query($conn, $sql);

            $query = "SELECT * FROM `user-profile` WHERE `E-mail`='$temp_store'";
            $exc = mysqli_query($conn, $query);
            while ($store = mysqli_fetch_assoc($exc)) {
                $_SESSION['name'] = $store['Name'];
                $_SESSION['lastname'] = $store['Lastname'];
                $_SESSION['country'] = $store['Country'];
                $_SESSION['language'] = $store['Language'];
                $_SESSION['mobile'] = $store['Mobile'];
                $_SESSION['add-1'] = $store['Address-1'];
                $_SESSION['add-2'] = $store['Address-2'];
                $_SESSION['postal'] = $store['Postal'];
                $_SESSION['city'] = $store['City'];
            }
            break;
        }
        else {
            $_nam = $_POST['name'];
            $_last = $_POST['lastname'];
            $_mail = $_SESSION['mail'];
            $_mob = $_POST['mobile'];
            $_country = $_POST['country'];
            $_lan = $_POST['languages'];
            $_add_2 = $_POST['address-1'];
            $_add_1 = $_POST['address-2'];
            $_postal = $_POST['postal'];
            $_city = $_POST['city'];

            $sql = "UPDATE `user-profile` SET `ID`='$i', `Name`='$_nam', `E-mail`='$temp_store', `Lastname`='$_last', `Country`='$_country', `Language`='$_lan', `Mobile`='$_mob', `Address-1`='$_add_1', `Address-2`='$_add_2', `Postal`='$_postal', `City`='$_city'";
            $run = mysqli_query($conn, $sql);

            $query = "SELECT * FROM `user-profile` WHERE `E-mail`='$temp_store'";
            $exc = mysqli_query($conn, $query);
            while ($store = mysqli_fetch_assoc($exc)) {
                $_SESSION['name'] = $store['Name'];
                $_SESSION['lastname'] = $store['Lastname'];
                $_SESSION['country'] = $store['Country'];
                $_SESSION['language'] = $store['Language'];
                $_SESSION['mobile'] = $store['Mobile'];
                $_SESSION['add-1'] = $store['Address-1'];
                $_SESSION['add-2'] = $store['Address-2'];
                $_SESSION['postal'] = $store['Postal'];
                $_SESSION['city'] = $store['City'];
            }
            break;
        }
    }
}

header("Location: profile");
