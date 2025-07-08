<?php

include("connection.php");

// $db = "images";


if (isset($_GET['all'])) {
    $limit = 15;
    if (isset($_GET['all'])) {
        $pages = $_GET['all'];
    } else {
        $pages = "1";
    }
    $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Upcoming`='0'";
    $run = mysqli_query($conn, $query);
    $store = mysqli_fetch_assoc($run);
    $var0 = $store['count'];
    $start = ($pages - 1) * $limit;
    $total_pages = ceil($var0 / $limit);

    $sql = "SELECT * FROM `user_img` WHERE `Upcoming`='0' ORDER BY `ID` LIMIT $start, $limit";

    $run = mysqli_query($conn, $sql);
    ?>

    <?php while ($store = mysqli_fetch_assoc($run)): ?>
    <?php
        $data_name = $store['Game_Name'];
        $data_rating = $store['Rating'];
        $data_purchase = $store['Purchase_Amount'];
        $data_discount = $store['Discount'];
        $data_source = $store['Source'];
        $data_alt = $store['Alternate'];
        $data_title = $store['Title'];

        if ($data_purchase != 0) {
            $discount_amount = intval($data_purchase - ($data_purchase*$data_discount)/100);
        } else {
            $discount_amount = $data_discount;
        }

        $t_star = 5;
        $formula = ($data_rating / $t_star) * 100;
        $_formula2 = round($formula / 10);
        $width = (($_formula2 * 10) - 8) . "px";

        echo "
                <a href='buy?game=$data_name' class='game_link'>
                    <div class='category_game'>";
        if ($data_discount == $data_purchase || $data_purchase == 0) {
            echo "";
        } else {
            echo "<div class='category_game_dis'>$data_discount%</div>";
        }
        ?>
        <?php if($data_discount == $discount_amount): ?>
                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    <?php echo $data_rating?>&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; <?php echo $discount_amount?></span>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
        <?php else: ?>
                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    <?php echo $data_rating?>&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; <?php echo $discount_amount?></span><sup> <strike><?php echo $data_purchase?></strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
        <?php endif ?>
    
    <?php endwhile?>
    <?php



} else if (isset($_GET['free'])) {
    $limit = 15;
    if (isset($_GET['free'])) {
        $pages = $_GET['free'];
    } else {
        $pages = "1";
    }
    $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Purchase_Amount`='0' AND `Upcoming`='0'";
    $run = mysqli_query($conn, $query);
    $store = mysqli_fetch_assoc($run);
    $var0 = $store['count'];
    $start = ($pages - 1) * $limit;
    $total_pages = ceil($var0 / $limit);

    $sql = "SELECT * FROM `user_img` WHERE `Purchase_Amount`='0' AND `Upcoming`='0' ORDER BY `ID` LIMIT $start, $limit";

    $run = mysqli_query($conn, $sql);

    while ($store = mysqli_fetch_assoc($run)) {
        $data_name = $store['Game_Name'];
        $data_rating = $store['Rating'];
        $data_purchase = $store['Purchase_Amount'];
        $data_discount = $store['Discount'];
        $data_source = $store['Source'];
        $data_alt = $store['Alternate'];
        $data_title = $store['Title'];

        if ($data_discount != 0 && $data_purchase != 0) {
            $discount_amount = intval($data_purchase - ($data_purchase*$data_discount)/100);
        } else {
            $discount_amount = $data_discount;
        }

        $t_star = 5;
        $formula = ($data_rating / $t_star) * 100;
        $_formula2 = round($formula / 10);
        $width = (($_formula2 * 10) - 8) . "px";

        echo "
                <a href='buy?game=$data_name' class='game_link'>
                    <div class='category_game'>";
        if ($data_discount == $data_purchase || $data_purchase == 0) {
            echo "";
        } else {
            echo "<div class='category_game_dis'>$data_discount%</div>";
        }

        ?>
        
        <?php if($data_discount == $discount_amount): ?>
                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    <?php echo $data_rating?>&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; <?php echo $discount_amount?></span>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
        <?php else: ?>
                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    <?php echo $data_rating?>&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; <?php echo $discount_amount?></span><sup> <strike><?php echo $data_purchase?></strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
        <?php endif ?> 
        <?php
    }
} else if (isset($_GET['popular'])) {
    $limit = 15;
    if (isset($_GET['popular'])) {
        $pages = $_GET['popular'];
    } else {
        $pages = "1";
    }
    $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Upcoming`='0'";
    $run = mysqli_query($conn, $query);
    $store = mysqli_fetch_assoc($run);
    $var0 = $store['count'];

    $start = ($pages - 1) * $limit;
    $total_pages = ceil($var0 / $limit);

    $sql = "SELECT * FROM `user_img` WHERE `Upcoming`='0' ORDER BY RAND() LIMIT $start, $limit";

    $run = mysqli_query($conn, $sql);

    while ($store = mysqli_fetch_assoc($run)) {
        $data_name = $store['Game_Name'];
        $data_rating = $store['Rating'];
        $data_purchase = $store['Purchase_Amount'];
        $data_discount = $store['Discount'];
        $data_source = $store['Source'];
        $data_alt = $store['Alternate'];
        $data_title = $store['Title'];

        if ($data_discount != 0 && $data_purchase != 0) {
            $discount_amount = intval($data_purchase - ($data_purchase*$data_discount)/100);
        } else {
            $discount_amount = $data_discount;
        }

        $t_star = 5;
        $formula = ($data_rating / $t_star) * 100;
        $_formula2 = round($formula / 10);
        $width = (($_formula2 * 10) - 8) . "px";

        echo "
                <a href='buy?game=$data_name' class='game_link'>
                    <div class='category_game'>";
        if ($data_discount == $data_purchase || $data_purchase == 0) {
            echo "";
        } else {
            echo "<div class='category_game_dis'>$data_discount%</div>";
        }

        ?>

        <?php if($data_discount == $discount_amount):?>
                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    <?php echo $data_rating?>&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; <?php echo $discount_amount?></span>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            
        <?php else:?>
                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    <?php echo $data_rating?>&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; <?php echo $discount_amount?></span><sup> <strike><?php echo $data_purchase?></strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
    
        <?php endif?>
        <?php
    }
} else if (isset($_GET['paid'])) {
    $limit = 15;
    if (isset($_GET['paid'])) {
        $pages = $_GET['paid'];
    } else {
        $pages = "1";
    }
    $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Purchase_Amount`!='0' AND `Upcoming`='0'";
    $run = mysqli_query($conn, $query);
    $store = mysqli_fetch_assoc($run);
    $var0 = $store['count'];

    $start = ($pages - 1) * $limit;
    $total_pages = ceil($var0 / $limit);

    $sql = "SELECT * FROM `user_img` WHERE `Purchase_Amount`!='0' AND `Upcoming`='0' ORDER BY `ID` LIMIT $start, $limit";

    $run = mysqli_query($conn, $sql);

    while ($store = mysqli_fetch_assoc($run)) {
        $data_name = $store['Game_Name'];
        $data_rating = $store['Rating'];
        $data_purchase = $store['Purchase_Amount'];
        $data_discount = $store['Discount'];
        $data_source = $store['Source'];
        $data_alt = $store['Alternate'];
        $data_title = $store['Title'];

        if ($data_discount != 0 && $data_purchase != 0) {
            $discount_amount = intval($data_purchase - ($data_purchase*$data_discount)/100);
        } else {
            $discount_amount = $data_discount;
        }

        $t_star = 5;
        $formula = ($data_rating / $t_star) * 100;
        $_formula2 = round($formula / 10);
        $width = (($_formula2 * 10) - 8) . "px";

        echo "
                <a href='buy?game=$data_name' class='game_link'>
                    <div class='category_game'>";
        if ($data_discount == $data_purchase || $data_purchase == 0) {
            echo "";
        } else {
            echo "<div class='category_game_dis'>$data_discount%</div>";
        }

        ?>

        <?php if($data_discount == $discount_amount):?>

                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    <?php echo $data_rating?>&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; <?php echo $discount_amount?></span>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
        
        <?php else: ?>
                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    <?php echo $data_rating?>&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:<?php echo $width?>' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; <?php echo $discount_amount?></span><sup> <strike><?php echo $data_purchase?></strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
            
        <?php endif?>
    <?php
    }
} else if (isset($_GET['upcoming'])) {
    $limit = 15;
    if (isset($_GET['upcoming'])) {
        $pages = $_GET['upcoming'];
    } else {
        $pages = "1";
    }
    $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Upcoming`!='0'";
    $run = mysqli_query($conn, $query);
    $store = mysqli_fetch_assoc($run);
    $var0 = $store['count'];

    $start = ($pages - 1) * $limit;
    $total_pages = ceil($var0 / $limit);

    $sql = "SELECT `Game_Name`, `Source`, `Alternate`, `Title`, `Upcoming` FROM `user_img` WHERE `Upcoming`!='0' ORDER BY `ID` LIMIT $start, $limit";

    $run = mysqli_query($conn, $sql);
    ?>

    <?php while ($store = mysqli_fetch_assoc($run)): ?>
        <?php
        $data_name = $store['Game_Name'];
        $data_source = $store['Source'];
        $data_alt = $store['Alternate'];
        $data_title = $store['Title'];
        $data_upcom = $store['Upcoming'];
        ?>
        <a href='buy?game=$data_name' class='game_link'>
                    <div class='category_game'>
                        <div class='category_game_img'>
                            <img class='store_game_img' src=../<?php echo $data_source?> alt='<?php echo $data_alt?>' title='<?php echo $data_title?>'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'><?php echo $data_name?></p>
                            <hr class='game_hr_line'>
                            <p class='game_released'><?php $data_upcom?></p>
                        </div>
                    </div>
                </a>
    <?php endwhile?>
    <?php
}
include("update.php");
include("search.php");
