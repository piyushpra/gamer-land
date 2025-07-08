<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "images";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (isset($_GET['min']) && isset($_GET['max'])) {
    if ($_GET['min'] != "" && $_GET['max'] != "") {
        
        if (isset($_GET['page'])) {
            $pages = $_GET['page'];
        } else {
            $pages = "1";
        }

        $min = $_GET['min'];
        //echo "<script>alert('$min')</script>";
        $max = $_GET['max'];

        $query01 = "SELECT COUNT(*) as count FROM `user_img` WHERE `Discount` BETWEEN '$min' AND '$max'";
        $run01 = mysqli_query($conn, $query01);
        $store1 = mysqli_fetch_assoc($run01);
        $var0 = $store1['count'];

        $limit = 15;
        $start = ($pages - 1) * $limit;
        $total_pages = ceil($var0 / $limit);

        $query = "SELECT * FROM `user_img` WHERE `Discount` BETWEEN '$min' AND '$max' LIMIT $start, $limit";
        $run = mysqli_query($conn, $query);

        while ($store = mysqli_fetch_assoc($run)) {
            $data_name = $store['Game_Name'];
            $data_rating = $store['Rating'];
            $data_discount = $store['Discount'];
            $data_amount = $store['Amount'];
            $data_source = $store['Source'];
            $data_alt = $store['Alternate'];
            $data_title = $store['Title'];

            if($data_amount != 0 && $data_discount != 0)
            {
                $dis = intval(($data_discount/$data_amount)*100);
            }
            else{
                $dis = 0;
            }
            
            $t_star = 5;
            $formula = ($data_rating / $t_star) * 100;
            $_formula2 = round($formula / 10);
            $width = (($_formula2*10)-8)."px";

            echo "
                <a href='buy?game=$data_name' class='game_link'>
                    <div class='category_game'>";
                    if($data_amount == $data_discount)
                    {
                        echo "";
                    }
                    else {
                        echo "<div class='category_game_dis'>$dis%</div>";
                    }
                echo   "<div class='category_game_img'>
                            <img class='store_game_img' src='$data_source' alt='$data_alt' title='$data_title'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'>$data_name</p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    $data_rating&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:$width;' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; $data_discount</span><sup> <strike>$data_amount</strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
                    ";
        }
    } else if ($_GET['min'] != "" && $_GET['max'] == "") {

        if (isset($_GET['page'])) {
            $pages = $_GET['page'];
        } else {
            $pages = "1";
        }

        $min = $_GET['min'];

        $query01 = "SELECT COUNT(*) as count FROM `user_img` WHERE `Discount`>='$min'";
        $run01 = mysqli_query($conn, $query01);
        $store1 = mysqli_fetch_assoc($run01);
        $var0 = $store1['count'];

        $limit = 15;
        $start = ($pages - 1) * $limit;
        $total_pages = ceil($var0 / $limit);

        $query = "SELECT * FROM `user_img` WHERE `Discount`>='$min' LIMIT $start, $limit";
        $run = mysqli_query($conn, $query);

        while ($store = mysqli_fetch_assoc($run)) {
            $data_name = $store['Game_Name'];
            $data_rating = $store['Rating'];
            $data_discount = $store['Discount'];
            $data_amount = $store['Amount'];
            $data_source = $store['Source'];
            $data_alt = $store['Alternate'];
            $data_title = $store['Title'];

            if($data_amount != 0 && $data_discount != 0)
            {
                $dis = intval(($data_discount/$data_amount)*100);
            }
            else{
                $dis = 0;
            }

            $t_star = 5;
            $formula = ($data_rating / $t_star) * 100;
            $_formula2 = round($formula / 10);
            $width = (($_formula2*10)-8)."px";

            echo "
                <a href='buy?game=$data_name' class='game_link'>
                    <div class='category_game'>";
                    if($data_amount == $data_discount)
                    {
                        echo "";
                    }
                    else {
                        echo "<div class='category_game_dis'>$dis%</div>";
                    }
                echo   "<div class='category_game_img'>
                            <img class='store_game_img' src='$data_source' alt='$data_alt' title='$data_title'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'>$data_name</p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    $data_rating&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:$width;' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; $data_discount</span><sup> <strike>$data_amount</strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
                    ";
        }
    } else if ($_GET['min'] == "" && $_GET['max'] != "") {

        if (isset($_GET['page'])) {
            $pages = $_GET['page'];
        } else {
            $pages = "1";
        }

        $max = $_GET['max'];

        $query01 = "SELECT COUNT(*) as count FROM `user_img` WHERE `Discount`>='$max'";
        $run01 = mysqli_query($conn, $query01);
        $store1 = mysqli_fetch_assoc($run01);
        $var0 = $store1['count'];

        $limit = 15;
        $start = ($pages - 1) * $limit;
        $total_pages = ceil($var0 / $limit);

        $query = "SELECT * FROM `user_img` WHERE `Discount`<='$max' LIMIT $start, $limit";
        $run = mysqli_query($conn, $query);

        while ($store = mysqli_fetch_assoc($run)) {
            $data_name = $store['Game_Name'];
            $data_rating = $store['Rating'];
            $data_discount = $store['Discount'];
            $data_amount = $store['Amount'];
            $data_source = $store['Source'];
            $data_alt = $store['Alternate'];
            $data_title = $store['Title'];

            if($data_amount != 0 && $data_discount != 0)
            {
                $dis = intval(($data_discount/$data_amount)*100);
            }
            else{
                $dis = 0;
            }

            $t_star = 5;
            $formula = ($data_rating / $t_star) * 100;
            $_formula2 = round($formula / 10);
            $width = (($_formula2*10)-8)."px";

            echo "
                <a href='buy?game=$data_name' class='game_link'>
                    <div class='category_game'>";
                    if($data_amount == $data_discount)
                    {
                        echo "";
                    }
                    else {
                        echo "<div class='category_game_dis'>$dis%</div>";
                    }
                echo   "<div class='category_game_img'>
                            <img class='store_game_img' src='$data_source' alt='$data_alt' title='$data_title'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'>$data_name</p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    $data_rating&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:$width;' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; $data_discount</span><sup> <strike>$data_amount</strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
                    ";
        }
    }
}
 