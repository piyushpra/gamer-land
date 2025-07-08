<?php
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $db = "credential";

// try {
//     if($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db))
//     {
//         $conn;
//     }
//     else {
//         // die("Failed to Login");
//         throw new Exception();
//     }
// } catch (Exception) {
//     echo "Error while Connecting";
// }


$servername = "sql113.ezyro.com";
$username = "ezyro_34587837";
$password = "pje35ye3tq";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ezyro_34587837_gamerland", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
