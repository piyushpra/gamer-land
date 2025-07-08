<?php

include("connection.php");

$db = "images";

try {
    if($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db))
    {
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
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>
            ";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?all=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
        } else if (isset($_GET['free'])) {
            $limit = 15;
            if (isset($_GET['free'])) {
                $pages = $_GET['free'];
            } else {
                $pages = "1";
            }
            $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Amount`='0' AND `Upcoming`='0'";
            $run = mysqli_query($conn, $query);
            $store = mysqli_fetch_assoc($run);
            $var0 = $store['count'];
            $start = ($pages - 1) * $limit;
            $total_pages = ceil($var0 / $limit);
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?free=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
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
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?popular=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
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
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?paid=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
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
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?upcoming=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
        }
        
        else if (isset($_GET['search'])) {
            $limit = 15;
            $srch = $_GET['search'];
            if (isset($_GET['page'])) {
                $pages = $_GET['page'];
            } else {
                $pages = "1";
            }
        
            $lower = strtolower($srch);
            $up = ucwords($srch);
        
            $query = "SELECT COUNT(*) as count FROM user_img LEFT JOIN category ON category.Game_Name=user_img.Game_Name WHERE user_img.Title LIKE '%$up%' OR user_img.Title LIKE '%$lower%' OR user_img.Game_Name LIKE '%$up%' OR user_img.Game_Name LIKE '%$lower%' OR category.Brand LIke '%$up%' OR category.Brand LIke '%$lower%' OR category.Genre LIke '%$up%' OR category.Genre LIke '%$lower%' OR category.Platform LIke '%$up%' OR category.Platform LIke '%$lower%' OR user_img.Rating LIke '%$srch.%'";
            $run = mysqli_query($conn, $query);
            $store = mysqli_fetch_assoc($run);
            $var0 = $store['count'];
        
            $start = ($pages - 1) * $limit;
            $total_pages = ceil($var0 / $limit);
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?search=$srch&page=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
        }
        
        else if (isset($_GET['rate'])) {
            //echo "<script>alert('work')</script>";
            $limit = 15;
            $srch = $_GET['rate'];
            if (isset($_GET['page'])) {
                $pages = $_GET['page'];
            } else {
                $pages = "1";
            }
        
            $query = "SELECT COUNT(*) AS count FROM user_img LEFT JOIN category ON category.Game_Name=user_img.Game_Name WHERE user_img.Rating LIke '%$srch.%'";
            $run = mysqli_query($conn, $query);
            $store = mysqli_fetch_assoc($run);
            $var0 = $store['count'];
        
            $start = ($pages - 1) * $limit;
            $total_pages = ceil($var0 / $limit);
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?rate=$srch&page=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
        }
        
        else if(isset($_GET['min']) && isset($_GET['max']))
        {
            if($_GET['min'] != "" && $_GET['max'] != "")
        {
            if (isset($_GET['page'])) {
                $pages = $_GET['page'];
            } else {
                $pages = "1";
            }
        
            $min = $_GET['min'];
            //echo "<script>alert('$min')</script>";
            $max = $_GET['max'];
        
            $limit = 15;
            $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Discount` BETWEEN '$min' AND '$max'";
            $run = mysqli_query($conn, $query);
            $store = mysqli_fetch_assoc($run);
            $var0 = $store['count'];
        
            $start = ($pages - 1) * $limit;
            $total_pages = ceil($var0 / $limit);
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?min=$min&max=$max&page=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
        } else if($_GET['min'] == "" && $_GET['max'] != "")
        {
            if (isset($_GET['page'])) {
                $pages = $_GET['page'];
            } else {
                $pages = "1";
            }
        
            $min = "";
            $max = $_GET['max'];
        
            $limit = 15;
            $pages = "1";
            $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Discount`<='$max'";
            $run = mysqli_query($conn, $query);
            $store = mysqli_fetch_assoc($run);
            $var0 = $store['count'];
        
            $start = ($pages - 1) * $limit;
            $total_pages = ceil($var0 / $limit);
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?min=$min&max=$max&page=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
        } 
        else if($_GET['min'] != "" && $_GET['max'] == "")
        {
            if (isset($_GET['page'])) {
                $pages = $_GET['page'];
            } else {
                $pages = "1";
            }
            $max = "";
            $min = $_GET['min'];
        
            $limit = 15;
            $pages = "1";
            $query = "SELECT COUNT(*) as count FROM `user_img` WHERE `Discount`>='$min'";
            $run = mysqli_query($conn, $query);
            $store = mysqli_fetch_assoc($run);
            $var0 = $store['count'];
        
            $start = ($pages - 1) * $limit;
            $total_pages = ceil($var0 / $limit);
        
            echo "<div class='mutiple_pages'>
                    <div class='pagination'>";
        
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a class='first_page' href='store?min=$min&max=$max&page=$i'>$i</a>";
            }
            echo "
                    </div>
                </div>";
        }
        }
    }
    else {
        throw new Exception();
    }
}
catch (Exception){
    echo "";
}



?>