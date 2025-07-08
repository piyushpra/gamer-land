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

    <link rel="stylesheet" href="../css/store.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/project.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="disable" onscroll="scroll1()" onresize="width()">
    <?php include("header.php"); ?>

    <section class="store">
        <div class="cat-collapse container" data-toggle="collapse" data-target="#game-store-collapse">
            <div class="cat-collapse-head">choose category</div>
            <div class="cat-collapse-bar"><i class="fas fa-bars"></i></div>
        </div>
        <div class="store_starts container">
            <div class="game_store collapse show" id="game-store-collapse">
                <div class="store-cat-collapse">
                    <div class="search">
                        <form class="search" method="GET">
                            <input type="search" placeholder="Search" name="search">
                            <button class="search_button" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="first_row">
                        <div class="platform_main_head" onclick="toggle1()">
                            <p class="platform_head">platform</p>
                            <span class="platform_plus">-</span>
                        </div>
                        <div class="platform_start">
                            <div class="platforms">
                                <a href="store?search=pc" class="platform"><input id="pc" type="checkbox"> PC</a>
                                <a href="store?search=xbox" class="platform"><input id="xbox" type="checkbox"> xbox</a>
                                <a href="store?search=playstation" class="platform"><input id="playstation" type="checkbox"> playstation</a>
                            </div>
                        </div>
                    </div>
                    <div class="second_row">
                        <div class="category_main_head" onclick="toggle2()">
                            <p class="category_head">genre</p>
                            <span class="category_plus">-</span>
                        </div>
                        <div class="category_start">
                            <div class="categories">
                                <a href="store?search=action" class="category"><input id="action" type="checkbox"> action</a>
                                <a href="store?search=adventure" class="category"><input id="adventure" type="checkbox"> adventure</a>
                                <a href="store?search=arcade" class="category"><input id="arcade" type="checkbox"> arcade</a>
                                <a href="store?search=fighting" class="category"><input id="fighting" type="checkbox"> fighting</a>
                                <a href="store?search=horror" class="category"><input id="horror" type="checkbox"> horror</a>
                                <a href="store?search=puzzle" class="category"><input id="puzzle" type="checkbox"> puzzle</a>
                                <a href="store?search=racing" class="category"><input id="racing" type="checkbox"> racing</a>
                                <a href="store?search=shooting" class="category"><input id="shooting" type="checkbox"> shooting games</a>
                                <a href="store?search=simulation" class="category"><input id="simulation" type="checkbox"> simulation</a>
                                <a href="store?search=sports" class="category"><input id="sports" type="checkbox"> sports</a>
                                <a href="store?search=war" class="category"><input id="war" type="checkbox"> war</a>
                                <a href="store?search=strategy" class="category"><input id="strategy" type="checkbox"> strategy</a>
                                <a href="store?search=mystery" class="category"><input id="mystery" type="checkbox"> mystery</a>
                                <a href="store?search=fantasy" class="category"><input id="fantasy" type="checkbox"> fantasy</a>
                                <a href="store?search=sci-fi" class="category"><input id="sci-fi" type="checkbox"> sci-fi</a>
                                <a href="store?search=rpg" class="category"><input id="rpg" type="checkbox"> RPG</a>
                                <a href="store?search=survival" class="category"><input id="survival" type="checkbox"> survival</a>
                                <a href="store?search=stealth" class="category"><input id="stealth" type="checkbox"> stealth</a>
                            </div>
                        </div>
                    </div>
                    <div class="third_row">
                        <div class="brand_main_head" onclick="toggle3()">
                            <p class="brand_head">Brand</p>
                            <span class="brand_plus">-</span>
                        </div>
                        <div class="brand_start">
                            <div class="brands">
                                <a href="store?search=activision" class="brand"><input id="activision" type="checkbox"> activision</a>
                                <a href="store?search=nintendo" class="brand"><input id="nintendo" type="checkbox"> nintendo</a>
                                <a href="store?search=rockstar" class="brand"><input id="rockstar" type="checkbox"> rockstar</a>
                                <a href="store?search=sony" class="brand"><input id="sony" type="checkbox"> sony</a>
                                <a href="store?search=ubisoft" class="brand"><input id="ubisoft" type="checkbox"> ubisoft</a>
                                <a href="store?search=microsoft" class="brand"><input id="microsoft" type="checkbox"> microsoft</a>
                                <a href="store?search=gameloft" class="brand"><input id="gameloft" type="checkbox"> gameloft</a>
                                <a href="store?search=ea" class="brand"><input id="ea" type="checkbox"> EA</a>
                                <a href="store?search=krafton" class="brand"><input id="krafton" type="checkbox"> krafton</a>
                            </div>
                        </div>
                    </div>
                    <div class="fourth_row">
                        <div class="amount_main_head" onclick="toggle4()">
                            <p class="amount_head">amount</p>
                            <span class="amount_plus">-</span>
                        </div>
                        <div class="amount_start">
                            <form class="amount" method="GET">
                                <input class="amount_box" type="number" placeholder="Min" name="min">
                                <input class="amount_box" type="number" placeholder="Max" name="max">
                                <button class="amount_update" type="submit">update</button>
                            </form>
                        </div>
                    </div>
                    <div class="fifth_row">
                        <div class="rating_main_head" onclick="toggle5()">
                            <p class="rating_head">rating</p>
                            <span class="rating_plus">-</span>
                        </div>
                        <div class="rating_start">
                            <div class="rating">
                                <a href="store?rate=2" class="rating_box"><input id="2" type="checkbox"> up to<span class="rating_stars"><i class="fas fa-star"></i><i class="fas fa-star"></i></span></a><br>
                                <a href="store?rate=3" class="rating_box"><input id="3" type="checkbox"> up to<span class="rating_stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></a><br>
                                <a href="store?rate=4" class="rating_box"><input id="4" type="checkbox"> up to<span class="rating_stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></a><br>
                                <a href="store?rate=5" class="rating_box"><input id="5" type="checkbox"> up to<span class="rating_stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="select_games">
                <?php

                //session_start();

                if (isset($_GET['all'])) {
                    $active1 = "active";
                    $active2 = "";
                    $active3 = "";
                    $active4 = "";
                    $active5 = "";
                } else if (isset($_GET['free'])) {
                    $active1 = "";
                    $active2 = "active";
                    $active3 = "";
                    $active4 = "";
                    $active5 = "";
                } else if (isset($_GET['popular'])) {
                    $active1 = "";
                    $active2 = "";
                    $active3 = "active";
                    $active4 = "";
                    $active5 = "";
                } else if (isset($_GET['paid'])) {
                    $active1 = "";
                    $active2 = "";
                    $active3 = "";
                    $active4 = "active";
                    $active5 = "";
                } else if (isset($_GET['upcoming'])) {
                    $active1 = "";
                    $active2 = "";
                    $active3 = "";
                    $active4 = "";
                    $active5 = "active";
                } else {
                    $active1 = "";
                    $active2 = "";
                    $active3 = "";
                    $active4 = "";
                    $active5 = "";
                }
                echo
                "<div class='select_category'>
                    <a class='games_category_value' href='store?all=1'>
                        <div class='select_all {$active1}'>
                            <p>all</p>
                        </div>
                    </a>
                    <a class='games_category_value' href='store?free=1'>
                        <div class='select_all {$active2}'>
                            <p>free</p>
                        </div>
                    </a>
                    <a class='games_category_value' href='store?popular=1'>
                        <div class='select_all {$active3}'>
                            <p>popular</p>
                        </div>
                    </a>
                    <a class='games_category_value' href='store?paid=1'>
                        <div class='select_all {$active4}'>
                            <p>paid</p>
                        </div>
                    </a>
                    <a class='games_category_value' href='store?upcoming=1'>
                        <div class='select_all {$active5}'>
                            <p>upcoming</p>
                        </div>
                    </a>
                </div>"
                ?>

                <div class="show_all_category">
                    <div class="category_wise">
                        <?php include("image_copy.php"); ?>

                    </div>
                    <?php include("pagination.php"); ?>

                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>

</html>