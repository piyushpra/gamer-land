<?php

if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];

    $lower = strtolower($search);
    $up = ucwords($search);

    $sql = "SELECT COUNT(*) AS count FROM user_img LEFT JOIN category ON category.Game_Name=user_img.Game_Name WHERE user_img.Title LIKE '%$up%' OR user_img.Title LIKE '%$lower%' OR user_img.Game_Name LIKE '%$up%' OR user_img.Game_Name LIKE '%$lower%' OR category.Brand LIke '%$up%' OR category.Brand LIke '%$lower%' OR category.Genre LIke '%$up%' OR category.Genre LIke '%$lower%' OR category.Platform LIke '%$up%' OR category.Platform LIke '%$lower%' OR user_img.Rating LIke '%$search.%'";
    $run = mysqli_query($conn, $sql);
    $st = mysqli_fetch_row($run);

    if ($st[0] > 0) {
        $limit = 15;
        if (isset($_GET['page'])) {
            $pages = $_GET['page'];
        } else {
            $pages = "1";
        }
        $var0 = $st[0];

        $start = ($pages - 1) * $limit;
        $total_pages = ceil($var0 / $limit);

        $sql1 = "SELECT * FROM `user_img` LEFT JOIN `category` ON category.Game_Name=user_img.Game_Name WHERE user_img.Title LIKE '%$up%' OR user_img.Title LIKE '%$lower%' OR user_img.Game_Name LIKE '%$up%' OR user_img.Game_Name LIKE '%$lower%' OR category.Brand LIke '%$up%' OR category.Brand LIke '%$lower%' OR category.Genre LIke '%$up%' OR category.Genre LIke '%$lower%' OR category.Platform LIke '%$up%' OR category.Platform LIke '%$lower%' OR user_img.Rating LIke '%$search.%' LIMIT $start, $limit";
        $run1 = mysqli_query($conn, $sql1);
        while ($store = mysqli_fetch_assoc($run1)) {
            $game_name = $store['Game_Name'];
            $rating = $store['Rating'];
            $discount = $store['Discount'];
            $amount = $store['Purchase_Amount'];
            $source = $store['Source'];
            $data_alt = $store['Alternate'];
            $data_title = $store['Title'];

            if($amount != 0 && $discount != 0)
            {
                $dis = $amount - intval(($amount*$discount) / 100);
            }
            else{
                $dis = $amount;
            }


            $t_star = 5;
            $formula = ((float)$rating / $t_star) * 100;
            $_formula2 = round($formula / 10);
            $width = (($_formula2*10)-8)."px";

            if($amount == $dis)
                {
                    echo "
                <a href='buy?game=$game_name' class='game_link'>
                    <div class='category_game'>";
                    if($amount == $discount)
                    {
                        echo "";
                    }
                    else {
                        echo "<div class='category_game_dis'>$discount%</div>";
                    }
                echo   "<div class='category_game_img'>
                            <img class='store_game_img' src=../$source alt='$data_alt' title='$data_title'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'>$game_name</p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    $rating&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:$width;' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; $dis</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
                    ";
                }
            else {
                echo "
                <a href='buy?game=$game_name' class='game_link'>
                    <div class='category_game'>";
                    if($amount == $discount)
                    {
                        echo "";
                    }
                    else {
                        echo "<div class='category_game_dis'>$discount%</div>";
                    }
                echo   "<div class='category_game_img'>
                            <img class='store_game_img' src=../$source alt='$data_alt' title='$data_title'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'>$game_name</p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    $rating&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:$width;' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; $dis</span><sup> <strike>$amount</strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
                    ";
                }
        }
    } else {
        echo "Result not found";
    }
}



if (isset($_GET['rate'])) {
    $search = $_GET['rate'];

    $sql = "SELECT COUNT(*) AS count FROM user_img LEFT JOIN category ON category.Game_Name=user_img.Game_Name WHERE user_img.Rating LIke '%$search.%'";
    $run = mysqli_query($conn, $sql);
    $st = mysqli_fetch_row($run);

    if ($st[0] > 0) {
        $limit = 15;
        if (isset($_GET['page'])) {
            $pages = $_GET['page'];
        } else {
            $pages = "1";
        }
        $var0 = $st[0];

        $start = ($pages - 1) * $limit;
        $total_pages = ceil($var0 / $limit);

        $sql1 = "SELECT * FROM `user_img` LEFT JOIN `category` ON category.Game_Name=user_img.Game_Name WHERE user_img.Rating LIke '%$search.%' LIMIT $start, $limit";
        $run1 = mysqli_query($conn, $sql1);
        while ($store = mysqli_fetch_assoc($run1)) {
            $game_name = $store['Game_Name'];
            $rating = $store['Rating'];
            $discount = $store['Discount'];
            $amount = $store['Amount'];
            $source = $store['Source'];
            $data_alt = $store['Alternate'];
            $data_title = $store['Title'];

            if($amount != 0 && $discount != 0)
            {
                $dis = $amount - intval(($amount*$discount) / 100);
            }
            else{
                $dis = $amount;
            }


            $t_star = 5;
            $formula = ((float)$rating / $t_star) * 100;
            $_formula2 = round($formula / 10);
            $width = (($_formula2*10)-8)."px";

            echo "
                <a href='buy?game=$game_name' class='game_link'>
                    <div class='category_game'>";
                    if($amount == $discount)
                    {
                        echo "";
                    }
                    else {
                        echo "<div class='category_game_dis'>$discount%</div>";
                    }
                echo   "<div class='category_game_img'>
                            <img class='store_game_img' src=../$source alt='$data_alt' title='$data_title'>
                        </div>
                        <div class='category_game_name_rating_amount'>
                            <p class='category_game_name'>$game_name</p>
                            <hr class='game_hr_line'>
                            <p class='rating_plus_amount'>
                                <div class='category_game_rating'>
                                    $rating&nbsp;
                                    <div class='star-outer'>
                                        <div style='width:$width;' class='star-inner'></div>
                                    </div>
                                </div
                                <span class='category_game_amount_paid'>
                                    <span>&#8377; $dis</span><sup> <strike>$amount</strike></sup>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
                    ";
        }
    } else {
        echo "Result not found";
    }
}
else if (isset($_GET['search']) && $_GET['search'] == "") {
    echo "Result Not Found";
}
