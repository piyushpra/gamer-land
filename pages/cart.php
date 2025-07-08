<?php

if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GAMER|LAND</title>
    <link rel="icon" href="../images/gamerland-logo-light.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../css/jquery.waypoints.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/project.js"></script>
</head>

<body onscroll="scroll1()" class="disable-select" onresize="width()">
    <?php include("header.php") ?>
    <section class="items container col-12">
        <div class="choice-dropdown">
            <form method="GET" class="add-item-by-search">
                <input type="text" name="s-i" class="select-items" value="" onclick="dropdown()">
                <input type="submit" value="Add by Search" class="item-search">
            </form>
        </div>
        <?php

        $dbhost = "127.0.0.1";
        $dbuser = "root";
        $dbpass = "";
        $db = "images";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

        if (isset($_GET['s-i'])) {
            if ($_GET['s-i'] != "") {
                $_val = $_GET['s-i'];
                $sql = "SELECT * FROM `user_img` WHERE `Game_Name`='$_val' LIMIT 1";
                $run = mysqli_query($conn, $sql);
                while ($store = mysqli_fetch_assoc($run)) {
                    $_name = $store['Game_Name'];
                    $_SESSION['g-name'] = $_name;
                    $_source = $store['Source'];
                    $_SESSION['g-source'] = $_source;
                    $_discount = $store['Discount'];
                    $_SESSION['g-discount'] = $_discount;
                    $_amount = $store['Purchase_Amount'];
                    $_SESSION['g-amount'] = $_amount;

                    $_aft_dis = $_amount - intval(($_amount * $_discount)/100);
                    array_push($_SESSION['arr'], array($_name, $_amount, $_discount, $_aft_dis, $_source));
                    $_SESSION['array'] = array_unique($_SESSION['arr'], SORT_REGULAR);
                }
            } else if ($_GET['s-i'] == "") {
                $_SESSION['arr'] = [];
                $_SESSION['array'] = [];
            }
        } else {
            $_SESSION['arr'] = [];
            $_SESSION['array'] = [];
            unset($_SESSION['g-name']);
            unset($_SESSION['g-source']);
            unset($_SESSION['g-discount']);
            unset($_SESSION['g-amount']);
        }

        ?>
    </section>
    <section class="cart-section container">
        <section class="two-sections col-12 col-lg-7">
            <div class="remove-all-item">
                <?php
                
                if(isset($_SESSION['array']) && sizeof($_SESSION['array']) > 0)
                {
                    echo "<a class='remove-all-items-cross' href='cart'>&times;</a>";  
                }
                
                ?>
            </div>
            <div class="cart-item-display">
                <h2 class="cart-empty-head">no item selected</h2>
                <p class="cart-empty">please add item by search or directly checked out item from store</p>
                <?php

                if (isset($_SESSION['g-name']) && isset($_SESSION['g-source']) && isset($_SESSION['g-discount'])) {
                    //print_r($_SESSION['arr']);
                    for ($i = 0; $i < sizeof($_SESSION['array']); $i++) {
                        $nam = $_SESSION['array'][$i][0];
                        $sel = $_SESSION['array'][$i][3];
                        $sr = $_SESSION['array'][$i][4];

                        echo "
                        <div class='item-selected'>
                            <div class='selected-item-img'>
                                <img src=../$sr class='selected-item-image'>
                            </div>
                            <div class='selected-item-details'>
                                <p class='selected-item-name'>item: $nam</p>
                                <p class='selected-item-price'>price: &#8377;$sel</p>
                            </div>
                        </div>
                        ";
                        //print_r($arr);
                    }
                } else if (!isset($_SESSION['g-name']) && !isset($_SESSION['g-source']) && !isset($_SESSION['g-discount'])) {
                    echo "";
                } else {
                    $_n = $_SESSION['g-name'];
                    $_s = $_SESSION['g-discount'];
                    $_src = $_SESSION['g-source'];

                    for ($i = 0; $i < sizeof($_SESSION['array']); $i++) {
                        $nam = $_SESSION['array'][$i][0];
                        $sel = $_SESSION['array'][$i][3];
                        $sr = $_SESSION['array'][$i][4];

                        echo "
                        <div class='item-selected'>
                            <div class='selected-item-img'>
                                <img src=../$sr class='selected-item-image'>
                            </div>
                            <div class='selected-item-details'>
                                <p class='selected-item-name'>item: $nam</p>
                                <p class='selected-item-price'>price: &#8377;$sel</p>
                            </div>
                        </div>
                        ";
                    }
                }
                ?>
            </div>
        </section>
        <section class="cart-details col-12 col-lg-5">
            <div class="cart">
                <table>
                    <tr>
                        <th class="cart-head">
                            <h4>item</h4>
                        </th>
                        <th class="cart-head">
                            <h4>amount</h4>
                        </th>
                    </tr>
                    <?php 
                    if (isset($_GET['s-i'])) {
                        if ($_GET['s-i'] != "") {
                            for ($i = 0; $i < sizeof($_SESSION['array']); $i++) {
                                echo "<tr>";
                                $_val = $_SESSION['array'][$i][0];
                                $sql = "SELECT `Discount`,`Purchase_Amount` FROM `user_img` WHERE Game_Name='$_val'";
                                $run = mysqli_query($conn, $sql);
                                while ($store = mysqli_fetch_assoc($run)) {
                                    if($store['Purchase_Amount'] == 0)
                                    {
                                        echo "
                                        <td class='cart-item'>{$_SESSION['array'][$i][0]}</td>
                                        <td class='cart-item-amount'>&#8377;{$_SESSION['array'][$i][3]}</td>
                                        ";
                                    }
                                    else {
                                        echo "
                                            <td class='cart-item'>{$_SESSION['array'][$i][0]}  <span class='badge' title='Discount Applied'>-{$_SESSION['array'][$i][2]}%</span></td>
                                            <td class='cart-item-amount'>&#8377;{$_SESSION['array'][$i][3]}</td>
                                            ";
                                    }
                                }
                                echo "</tr>";
                            }
                        } else {
                            echo "
                            <tr>
                                <td class='cart-item'>no item</td>
                                <td class='cart-item-amount'>&#8377;0</td>
                            </tr>
                            ";
                        }
                    } else {
                        echo "
                        <tr>
                            <td class='cart-item'>no item</td>
                            <td class='cart-item-amount'>&#8377;0</td>
                        </tr>
                        ";
                    }

                    if (isset($_GET['s-i'])) {
                        if ($_GET['s-i'] != "") {
                            $t_amt = 0;
                            for ($i = 0; $i < sizeof($_SESSION['array']); $i++) {
                                $t_amt = $t_amt + $_SESSION['array'][$i][3];
                            }
                            echo "
                            <tr>
                                <td class='cart-total-head'>total</td>
                                <td class='cart-total-amount'>&#8377; $t_amt</td>
                            </tr>
                            ";
                        } else {
                            echo "
                            <tr>
                                <td class='cart-total-head'>total</td>
                                <td class='cart-total-amount'>&#8377;0</td>
                            </tr>
                            ";
                        }
                    } /*else if (isset($_SESSION['g-amount']) && isset($_SESSION['g-discount'])) {
                        $buy = $_SESSION['g-amount'];
                        $sell = $_SESSION['g-discount'];
                        $discount = ceil($buy - $sell);
                        echo "
                                <tr>
                                    <td class='cart-item-discount'>discount</td>
                                    <td class='cart-item-discount'>- &#8377; $discount</td>
                                </tr>
                                <tr>
                                    <td class='cart-total-head'>total</td>
                                    <td class='cart-total-amount'>&#8377; $sell</td>
                                </tr>
                                ";
                    }*/

                    ?>
                </table>
                <form action="payment.php" method="POST">
                    <input type="submit" name="submit" value="Checkout" class="item-checkout">
                </form>
            </div>
        </section>
    </section>
    <?php

    if (isset($_GET['s-i'])) {
        if ($_GET['s-i'] == "") {
            echo "
        <script>
            $('.item-selected').remove();
        </script>
        ";
        }

        if ($_GET['s-i'] != "") {
            echo "
        <script>
            $('.cart-empty-head').remove();
            $('.cart-empty').remove();
        </script>
        ";
        }
    }

    ?>
</body>

</html>