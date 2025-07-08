<?php

include("connection.php");

$db = "images";


try {
    if ($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)) {
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

            while ($store = mysqli_fetch_assoc($run)) {
                $game_name = $store['Game_Name'];
                $rating = $store['Rating'];
                $discount = $store['Discount'];
                $amount = $store['Amount'];
                $source = $store['Source'];
                $data_alt = $store['Alternate'];
                $data_title = $store['Title'];

                if ($amount != 0 && $discount != 0) {
                    $dis = $amount - intval(($amount*$discount) / 100);
                } else {
                    $dis = $amount;
                }

                $t_star = 5;
                $formula = ($rating / $t_star) * 100;
                $_formula2 = round($formula / 10);
                $width = (($_formula2 * 10) - 8) . "px";

                echo "
                        <a href='buy?game=$game_name' class='game_link'>
                            <div class='category_game'>";
                if ($amount == $discount || $discount == 0) {
                    echo "";
                } else {
                    echo "<div class='category_game_dis'>$discount%</div>";
                }
                if($amount == $dis)
                {
                    echo   "<div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
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
                                            <span>&#8377; $amount</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </a>
                            ";
                }
                else {
                    echo   "<div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
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
                $game_name = $store['Game_Name'];
                $rating = $store['Rating'];
                $discount = $store['Discount'];
                $amount = $store['Amount'];
                $source = $store['Source'];
                $data_alt = $store['Alternate'];
                $data_title = $store['Title'];

                if ($amount != 0 && $discount != 0) {
                    $dis = $amount - intval(($amount*$discount) / 100);
                } else {
                    $dis = $amount;
                }

                $t_star = 5;
                $formula = ($rating / $t_star) * 100;
                $_formula2 = round($formula / 10);
                $width = (($_formula2 * 10) - 8) . "px";

                echo "
                        <a href='buy?game=$game_name' class='game_link'>
                            <div class='category_game'>";
                if ($amount == $discount || $discount == 0) {
                    echo "";
                } else {
                    echo "<div class='category_game_dis'>$discount%</div>";
                }
                
                if($amount == $dis)
                {
                    echo   "<div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
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
                                            <span>&#8377; $amount</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </a>
                            ";
                }
                else {
                    echo   "<div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
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
                $game_name = $store['Game_Name'];
                $rating = $store['Rating'];
                $discount = $store['Discount'];
                $amount = $store['Amount'];
                $source = $store['Source'];
                $data_alt = $store['Alternate'];
                $data_title = $store['Title'];

                if ($amount != 0 && $discount != 0) {
                    $dis = $amount - intval(($amount*$discount) / 100);
                } else {
                    $dis = $amount;
                }

                $t_star = 5;
                $formula = ($rating / $t_star) * 100;
                $_formula2 = round($formula / 10);
                $width = (($_formula2 * 10) - 8) . "px";

                echo "
                        <a href='buy?game=$game_name' class='game_link'>
                            <div class='category_game'>";
                if ($amount == $discount || $discount == 0) {
                    echo "";
                } else {
                    echo "<div class='category_game_dis'>$discount%</div>";
                }
                if($amount == $dis)
                {
                    echo   "<div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
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
                                            <span>&#8377; $amount</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </a>
                            ";
                }
                else {
                    echo   "<div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
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
        } else if (isset($_GET['paid'])) {
            $limit = 15;
            if (isset($_GET['paid'])) {
                $pages = $_GET['paid'];
            } else {
                $pages = "1";
            }
            $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Amount`!='0' AND `Upcoming`='0'";
            $run = mysqli_query($conn, $query);
            $store = mysqli_fetch_assoc($run);
            $var0 = $store['count'];

            $start = ($pages - 1) * $limit;
            $total_pages = ceil($var0 / $limit);

            $sql = "SELECT * FROM `user_img` WHERE `Purchase_Amount`!='0' AND `Upcoming`='0' ORDER BY `ID` LIMIT $start, $limit";

            $run = mysqli_query($conn, $sql);

            while ($store = mysqli_fetch_assoc($run)) {
                $game_name = $store['Game_Name'];
                $rating = $store['Rating'];
                $discount = $store['Discount'];
                $amount = $store['Amount'];
                $source = $store['Source'];
                $data_alt = $store['Alternate'];
                $data_title = $store['Title'];

                if ($amount != 0 && $discount != 0) {
                    $dis = $amount - intval(($amount*$discount) / 100);
                } else {
                    $dis = $amount;
                }

                $t_star = 5;
                $formula = ($rating / $t_star) * 100;
                $_formula2 = round($formula / 10);
                $width = (($_formula2 * 10) - 8) . "px";

                echo "
                        <a href='buy?game=$game_name' class='game_link'>
                            <div class='category_game'>";
                if ($amount == $discount || $discount == 0) {
                    echo "";
                } else {
                    echo "<div class='category_game_dis'>$discount%</div>";
                }
                if($amount == $dis)
                {
                    echo   "<div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
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
                                            <span>&#8377; $amount</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </a>
                            ";
                }
                else {
                    echo   "<div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
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

            while ($store = mysqli_fetch_assoc($run)) {
                $game_name = $store['Game_Name'];
                $source = $store['Source'];
                $data_alt = $store['Alternate'];
                $data_title = $store['Title'];
                $data_upcom = $store['Upcoming'];

                echo "
                        <a href='buy?game=$game_name' class='game_link'>
                            <div class='category_game'>
                                <div class='category_game_img'>
                                    <img class='store_game_img' src=../'$source' alt='$data_alt' title='$data_title'>
                                </div>
                                <div class='category_game_name_rating_amount'>
                                    <p class='category_game_name'>$game_name</p>
                                    <hr class='game_hr_line'>
                                    <p class='game_released'>$data_upcom</p>
                                </div>
                            </div>
                        </a>
                            ";
            }
        }
        include("update.php");
        include("search.php");
    } else {
        throw new Exception();
    }
} catch (Exception) {
    echo "Something went wrong!";
}
