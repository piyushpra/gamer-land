<?php

if (!isset($_SESSION)) {
    session_start();
}
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "images";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>GAMER|LAND</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/gamerland-logo-light.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/payment.css">
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/project.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="disable" onscroll="scroll1()" onresize="width()">
    <?php include("header.php"); ?>
    <section class="playment">
        <img class="zoom-bg" src="images/battle_image_2.jpg">
        <form class="pay-option container" id="c-p" method="POST" action="place-order.php">
            <div class="bill-address col-12 col-lg-6">
                <h3>billing address</h3>
                <div class="bill-details">
                    <div class="info">
                        <label for="Name">Name: </label>
                        <input class="bill-add" type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="info">
                        <label for="Email">Email: </label>
                        <input class="bill-add" type="email" placeholder="Email" name="email" value="<?php if (isset($_SESSION['username']) && isset($_SESSION['mail'])){ echo $_SESSION['mail'];} else {echo "";} ?>" required>
                    </div>
                    <div class="info">
                        <label for="Mobile Number">Mobile Number: </label>
                        <input class="bill-add" type="text" placeholder="Mobile Number" name="mobile" required>
                    </div>
                    <div class="address">
                        <h3 class="address-head">address</h3>
                    </div>
                    <div class="info">
                        <label for="Address">Address: </label>
                        <input class="bill-add" class="address" type="text" placeholder="Address" name="address" required>
                    </div>
                    <div class="info">
                        <label for="City">City: </label>
                        <input class="bill-add" class="addresses" type="text" placeholder="City" name="city" required>
                    </div>
                    <div class="info">
                        <label for="state">state: </label>
                        <input class="bill-add" class="addresses" type="text" placeholder="State" name="state" required>
                    </div>
                    <div class="info">
                        <label for="Postal">Postal: </label>
                        <input class="bill-add" class="addresses" type="text" placeholder="Postal" name="postal" required>
                    </div>
                </div>
            </div>
            <div class="payment-cart col-12 col-lg-6">
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
                        if (isset($_SESSION['array'])) {
                            for ($i = 0; $i < sizeof($_SESSION['array']); $i++) {
                                echo "<tr>";
                                $_val = $_SESSION['array'][$i][0];
                                $sql = "SELECT `Discount`,`Purchase_Amount` FROM `user_img` WHERE Game_Name='$_val'";
                                $run = mysqli_query($conn, $sql);
                                while ($store = mysqli_fetch_assoc($run)) {
                                    if ($store['Discount'] != 0 && $store['Purchase_Amount'] != 0) {
                                        echo "
                                        <td class='cart-item'>{$_SESSION['array'][$i][0]}  <span class='badge' title='Discount Applied'>-{$_SESSION['array'][$i][2]}%</span></td>
                                        <td class='cart-item-amount'>&#8377;{$_SESSION['array'][$i][3]}</td>
                                        ";
                                    } else if ($store['Discount'] == 0 && $store['Purchase_Amount'] == 0) {
                                        $dis = 0;
                                        echo "
                                        <td class='cart-item'>{$_SESSION['array'][$i][0]}<span class='badge' title='Discount Amount'>-{$_SESSION['array'][$i][2]}</span></td>
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
                        $t_amt = 0;
                        if (isset($_SESSION['array'])) {
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

                        ?>
                    </table>
                </div>
                <div class="add-payment">
                    <div class="payment-head">
                        <h3>add payment method</h3>
                    </div>
                    <div class="payment-method">
                        <div class="method" data-toggle="collapse" data-target="#credit-card">
                            <img class="method-credit-img" src="../images/credit-card.png">
                            <p class="method-name">credit card</p>
                            <p class="amount">amount: &#8377; <?php echo $t_amt ?></p>
                        </div>
                        <div class="credit-collapse collapse" id="credit-card">
                            <div class="credit-detail">
                                <div class="details">
                                    <label class="card-detail-head">card number</label>
                                    <input class="data" id="card-details" placeholder="Card Number" name="card-num" required>
                                </div>
                                <div class="details">
                                    <label class="card-detail-head">month</label>
                                    <input class="data" type="month" name="card-mon-year" required>
                                </div>
                                <div class="details">
                                    <label class="card-detail-head">CVV</label>
                                    <input class="data" type="number" name="card-cvv" required>
                                </div>
                                <div class="details-button">
                                    <input class="btn-cancel" type="reset" value="Cancel">
                                    <button class="btn-submit">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="method" data-toggle="collapse" data-target="#paypal">
                            <img class="method-paypal-img" src="../images/paypal.png">
                            <p class="method-name">paypal</p>
                            <p class="amount">amount: &#8377; <?php echo $t_amt ?></p>
                        </div>
                        <div class="paypal-collapse collapse" id="paypal">
                            <div class="paypal-acc">
                                <p class="paypal-info">
                                    This payment method will be stored and associated with your Epic Games account for future purchases.
                                    You will be directed to PayPal to authorize your payment method, then you will be returned to Epic Games to complete this purchase.
                                </p>
                                <div class="details-button">
                                    <input class="btn-submit" type="submit" value="Add Paypal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="c-p container">
            <input type="reset" value="Cancel" class="reset-all" form="#c-p">
            <input type="submit" value="Submit" class="submit-all" form="#c-p">
        </div>
    </section>
</body>

</html>