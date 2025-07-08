<?php

if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>GAMER|LAND</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <link rel="stylesheet" href="../css/buy.css">
    <script src="../js/project.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body onscroll="scroll1()" class="disable-select">
    <div class="loader"></div>
    <?php include("header.php"); ?>

    <section class="buying_games container">
        <div class="game_show">
            <div class="game_detail">
                <?php
                include("connection.php");
                $db = "images";

                // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

                include("search.php");


                if (!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
                    die("Failed to Connect Database");
                } else if ($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
                    if (isset($_GET['game'])) {
                        $name = $_GET['game'];

                        //echo "<script>alert('$name')</script>";

                        $low = strtolower($name);
                        $capital = ucwords($name);

                        $q = "SELECT * FROM `category` WHERE `Game_Name`='$low' OR `Game_Name`='$capital' OR `Title` lIKE '%$low%' OR `Title` lIKE '%$capital%' OR `Brand`='$low' OR `Brand` lIKE '%$capital%' LIMIT 1";
                        $r = mysqli_query($conn, $q);
                        $s = mysqli_fetch_assoc($r);
                        $fetch_rows = mysqli_num_rows($r);

                        if($fetch_rows > 0)
                        {
                            $genre = $s['Genre'];
                        }
                        else {
                            $genre = "";
                            echo "Not Found";
                        }
                        
                        $g = explode(" ", $genre);
                        if (isset($g[0])) {
                            $_first = $g[0];
                        } else {
                            $_first = "0";
                        }

                        if (isset($g[1])) {
                            $_second = $g[1];
                        } else {
                            $_second = "0";
                        }

                        if (isset($g[2])) {
                            $_third = $g[2];
                        } else {
                            $_third = "0";
                        }

                        $query = "SELECT * FROM user_img as table1 LEFT JOIN buy_img as table2 ON table1.ID = table2.ID WHERE table1.Game_Name LIKE '%$low%' LIMIT 1";
                        $run = mysqli_query($conn, $query);
                        ?>
                        <?php while ($store = mysqli_fetch_assoc($run)): ?>
                        <?php
                            $data_name = $store['Game_Name'];
                            $data_rating = $store['Rating'];
                            $data_purchase = $store['Purchase_Amount'];
                            $data_discount = $store['Discount'];
                            $data_alt = $store['Alternate'];
                            $data_title = $store['Title'];
                            $data_description = $store['Description'];
                            $data_released = $store['Released_Date'];
                            $data_src = $store['Source'];
                            $data_source_1 = $store['Source_1'];
                            $data_source_2 = $store['Source_2'];
                            $data_source_3 = $store['Source_3'];
                            $data_source_4 = $store['Source_4'];
                            $data_source_5 = $store['Source_5'];

                            $amt = intval($data_purchase - ($data_purchase*$data_discount)/100);
                            
                            $t_star = 5;
                            $formula = ($data_rating / $t_star) * 100;
                            $_formula2 = round($formula / 10);
                            $width = (($_formula2*10)-6)."px";
                            ?>

                            <div class='game_img col-12 col-md-6'>
                                <img class='game_img0' src='<?php echo $data_source_1?>' alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                                <div class='game_more_img'>
                                    <a class='game_more_link1' onclick='change1()' href='#010'><img class='game_more_1' src='<?php echo $data_source_1?>'
                                            alt='<?php echo $data_alt ?>'></a>
                                    <a class='game_more_link2' onclick='change2()' href='#020'><img class='game_more_2' src='<?php echo $data_source_2?>'
                                            alt='<?php echo $data_alt ?>'></a>
                                    <a class='game_more_link3' onclick='change3()' href='#030'><img class='game_more_3' src='<?php echo $data_source_3?>'
                                            alt='<?php echo $data_alt ?>'></a>
                                    <a class='game_more_link4' onclick='change4()' href='#040'><img class='game_more_4' src='<?php echo $data_source_4?>'
                                            alt='<?php echo $data_alt ?>'></a>
                                </div>
                            </div>
                            <div class='game_more_detail col-12 col-md-6'>
                                <h3 class='game_name'><?php echo $data_name?></h3>
                                <div class='game_rating'>
                                    <p><?php echo $data_rating?> 
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>;' class='star-inner'></div>
                                    </div>
                                    </p>
                                </div>
                                <div class='game_price'>
                                    &#8377;<?php echo $amt?>
                                </div>
                                <hr class='game_show_hr'>
                                <div class='detailed'>
                                    <div class='game_released_date'>
                                        <span class='game_released_diff'>released date:</span> <?php echo $data_released?>
                                    </div>
                                    <div class='game_date_category'>
                                        <div class='game_type'>
                                            <span class='game_type_head'>type</span>
                                            <ul>
                                                <li>standard</li>
                                            </ul>
                                        </div>
                                        <div class='game_category_1'>
                                            <span class='game_category_head'>category</span>
                                            <ul>
                                                <li class='cat_1'><?php echo $_first?></li>
                                                <li class='cat_2'><?php echo $_second?></li>
                                                <li class='cat_3'><?php echo $_third?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr class='game_show_hr'>
                                <div class='game_two_button'>
                                    <a href='cart.php?s-i=<?php echo $data_name?>' class='game_add_cart'><i id='add_cart_icon' class='fas fa-shopping-cart'></i>add to
                                        cart</a>
                                    <a href='payment.php' class='game_add_wishlist'><i id='add_wishlist_icon'
                                            class='fas fa-clipboard-list'></i>checkout</a>
                                </div>
                                <div class='description'>
                                    <ul class='nav nav-tabs' role='tablist'>
                                        <li class='nav-link active'>
                                            <a href='#description' class='nav-link nav-link2' data-toggle='tab'>Description</a>
                                        </li>
                                    </ul>
                                    <div class='tab-content'>
                                        <div id='description' class='tab-pane active'>
                                            <p class='pubg_description'>
                                                <?php echo $data_description?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endwhile ?>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>


    <section class="container may_also_like">
        <div class="may_like_head">may also like: </div>
        <div class="may_like">
            <div class="all_likes">
                <div class="like_1">
                    <img src="../images/Call-of-Duty.jpg" alt="Call of Duty">
                    <p class="like_para">
                        call of duty
                    </p>
                    <p class="may_like_price">
                        &#8377;840
                    </p>
                </div>
                <div class="like_2">
                    <img src="../images/cod_black_ops_1920x1080.jpg" alt="Call of Duty Black Ops">
                    <p class="like_para">
                        call of duty black ops
                    </p>
                    <p class="may_like_price">
                        &#8377;1350
                    </p>
                </div>
                <div class="like_3">
                    <img src="../images/cod_black_ops_cold_war_1920x1080.jpg" alt="Call of Duty Black Ops Cold War">
                    <p class="like_para">
                        call of duty black ops cold war
                    </p>
                    <p class="may_like_price">
                        &#8377;4500
                    </p>
                </div>
                <div class="like_4">
                    <img src="../images/battlefield_1_1920x1080.jpg" alt="Battlefield 1">
                    <p class="like_para">
                        battlefield 1
                    </p>
                    <p class="may_like_price">
                        &#8377;720
                    </p>
                </div>
                <div class="like_5">
                    <img src="../images/battlefield_3_1920x1080.jpg" alt="Battlefield 3">
                    <p class="like_para">
                        battlefield 3
                    </p>
                    <p class="may_like_price">
                        &#8377;840
                    </p>
                </div>
                <div class="like_6">
                    <img src="../images/battlefield_4_1920x1080.jpg" alt="Battlefield 4">
                    <p class="like_para">
                        battlefield 4
                    </p>
                    <p class="may_like_price">
                        &#8377;680
                    </p>
                </div>
                <div class="like_7">
                    <img src="../images/gear-of-war3_1920x1080.jpg" alt="Gear of War 3">
                    <p class="like_para">
                        gear of war 3
                    </p>
                    <p class="may_like_price">
                        &#8377;450
                    </p>
                </div>
                <div class="like_8">
                    <img src="../images/gear-of-war_judgement.jpg" alt="Gear of War Judgement">
                    <p class="like_para">
                        gear of war judgement
                    </p>
                    <p class="may_like_price">
                        &#8377;1200
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include("footer.php") ?>

</body>

</html>