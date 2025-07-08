<?php

if (!isset($_SESSION)) {
    session_start();
}
include("pages/file_add_check.php");

$_SESSION['arr'] = [];
$_SESSION['array'] = [];
$_SESSION['check-only-for-one'] = 0;
$_SESSION['multiple'] = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GAMER|LAND</title>
    <link rel="icon" href="images/gamerland-logo-light.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/project.js"></script>
    <script>
        $(document).ready(function() {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</head>

<body onscroll="scroll()" class="disable-select" onresize="width()">
    <div class="loader"></div>

    <header>
        <div class="contact_detail">
            <ul class="phone_mail">
                <li class="phone">Call Us : +91 8377912288</li>
                <li class="mail">Email Us : cocc4233@gmail.com</li>
            </ul>
        </div>
        <form class="search" method="GET" action="store.php?">
            <input type="search" placeholder="Search" name="search">
            <button class="search_button" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </header>

    <?php include("pages/header.php"); ?>

    <div id="mycarousel" class="carousel" data-ride="carousel" data-pause="hover">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a class="get-now" href="#7" data-target="#myModal1" data-toggle="modal"><img class="img1" src="images/681867.jpg"></a>
            </div>
            <div class="carousel-item">
                <a class="get-now" href="#8" data-target="#myModal2" data-toggle="modal">
                    <img class="img2" src="images/red-dead-redemption-2-pc-rockstar-launcher-aggiorna-risolvere-problemi-v3-409812-1280x720.jpg">
                </a>
            </div>
            <div class="carousel-item">
                <a class="get-now" href="#9" data-target="#myModal3" data-toggle="modal">
                    <img class="img3" src="images/gta-5-1.jpg">
                </a>
            </div>
            <div class="carousel-item">
                <a class="get-now" href="##1" data-target="#myModal4" data-toggle="modal">
                    <img class="img4" src="images/EA-anunta-Need-for-Speed-Heat.jpg">
                </a>
            </div>
            <div class="carousel-item">
                <a class="get-now" href="##2" data-target="#myModal5" data-toggle="modal">
                    <img class="img5" src="images/w3.jpg">
                </a>
            </div>
        </div>
        <a class="left carousel-control" href="#mycarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#mycarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <div class="released-background">
        <div class="released-area container">
            <div id="released-content">
                <h2 id="released-head">released <span id="content-diff-color">games</span></h2>
                <p id="released-para">Compete with 100 players on a remote island for winner takes showdown known
                    issue
                    where certain skin strategic
                </p>
                <span class="released-rod">
                    <img class="title-bar" src="images/title_bar02.png">
                </span>
            </div>

            <div id="released-games">
                <div class="col-xl-8 col-lg-12" id="view-game">

                    <div class="carousel col-xl-5 col-lg-5" data-ride="carousel" id="released-game-img" data-interval="0">
                        <ul class="carousel-indicators">
                            <li data-target="#released-game-img" class="change-name0 active" data-slide-to="0" onclick="call_of_duty()"></li>
                            <li data-target="#released-game-img" class="change-name1" data-slide-to="1" onclick="gear_of_war()"></li>
                            <li data-target="#released-game-img" class="change-name2" data-slide-to="2" onclick="battlefield()"></li>
                        </ul>
                        <div class="carousel-inner released">
                            <div class="carousel-item active">
                                <img id="released-img" src="images/cod_mw_1080x1920.jpg" alt="Call Of Duty">
                            </div>
                            <div class="carousel-item">
                                <img id="released-img" src="images/gear_of_war_1080x1920.jpg" alt="Gear Of War 4">
                            </div>
                            <div class="carousel-item">
                                <img id="released-img" src="images/b_1080x1920.png" alt="Battlefield 5">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7" id="released-game-details">
                        <ul id="released-contents" class="col-xl-12 col-lg-12">
                            <li id="game-rating">rating : <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </li>
                            <li id="game-name"><span id="game-color-black0">call</span> <span id="game-color-white0">of
                                    duty</span></li>
                            <li id="game-content">
                            <li id="g-content1"><span id="game-color-black1">category :</span> virtual game</li>
                            <li id="g-content2"><span id="game-color-black1">model :</span> complete 100 players
                            </li>
                            <li id="g-content3"><span id="game-color-black1">controller :</span> playstation 5,
                                Xbox,
                                PS4</li>
                            </li>
                            <li id="game-about">
                                <p id="g-about-para">complete with 100 players on a remote thats island for winner
                                    takes
                                    showdown known issues
                                </p>
                            </li>
                            <li id="game-buy">
                                <a id="game-buy-link" href="pages/buy.php?game=call of duty modern warfare">buy now</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12" id="game-refferance">
                    <div id="refferance1"><a href="pages/buy.php?game=Playerunknowns Battlegrounds" class="change_reff0"><img alt="pubg" title="PUBG" id="refferance-img0" src="images/pubg1.jpg" width="100%"></a></div>
                    <div id="refferance2"><a href="pages/buy.php?game=tekken 7" class="change_reff1"><img alt="tekken-7" title="Tekken 7" id="refferance-img1" src="images/tekken-7.jpg" width="100%"></a>
                    </div>
                    <div id="refferance3"><a href="pages/buy.php?game=forza horizon 4" class="change_reff2"><img alt="horizon" title="Forza Horizon 4" id="refferance-img2" src="images/forza-horizon-4.jpg" width="100%"></a></div>
                </div>
            </div>
        </div>
    </div>


    <section class="background_for_gamers">
        <div class="gamers-view container">
            <div class="gamers_details">
                <div class="gamers_header">
                    <h2><span class="gamers_white_color">just for</span> <span class="gamers_orange_color">gamers</span>
                    </h2>
                    <p class="gamers_para">complete with 100 players on a remote island for winner known issue where
                        certain strategic</p>
                </div>
                <div class="gamers_content">
                    <div class="gamers_discount_img">
                        <img src="images/pubg2.jpg">
                    </div>
                    <div class="gamers_discount_details">
                        <p class="discount_detail"><strike>&#8377;599</strike> &#8377;399</p>
                        <a href="pages/buy.php?game=Playerunknowns Battlegrounds" class="discount_button">Buy More</a>
                    </div>
                </div>
            </div>
            <div class="design_work">
                <img class="gamer_character" src="images/pubg_girl.png">
                <div class="wheel_rotator">
                    <img class="wheel_rotator_img0" src="images/gamers_circle_line.png">
                    <img class="wheel_rotator_img1" src="images/gamers_circle_shape.png">
                </div>
                <img class="gamer_chart" src="images/just_gamers_chart.png">
            </div>
        </div>
    </section>


    <section class="choose_games container">
        <div class="about_choose col-lg-6 col-xl-6">
            <h1 class="choose_heading">choose from <span class="choose_heading_orange">10000+ games</span> to
                download
            </h1>
            <p class="choose_para">
                <span class="choose_para_bold">categories</span> : action, shooting, adventure, fighting, horror,
                simulation, war, strategy, mystery, sci-fi, survival...
            </p>
            <p class="choose_para">
                <span class="choose_para_bold">platforms</span> : desktops, laptops, xbox - xbox 360, live
            </p>
        </div>
        <div class="choose_img col-lg-6 col-xl-6">
            <img src="images/about.jpg">
        </div>
    </section>

    <section class="platforms">

    <?php for ($i=1; $i <= 4; $i++): ?>
    <?php $platformNames = ["Desktop", "PS4", "Xbox", "WI"] ?>

        <div class="platform_img_<?php echo $i;?> col-12 col-sm-6 col-lg-3" onmouseover="hover<?php echo $i;?>()" onmouseout="un_hover<?php echo $i;?>()">
            <img class="platform<?php echo $i;?>" src="images/platform-<?php echo $i;?>.jpg">
            <div class="hidden_platform_detail_<?php echo $i;?>">
                <h2 class="hidden_head_<?php echo $i;?>"><?php echo $platformNames[$i-1];?></h2>
                <div class="platform_hid_image_<?php echo $i;?>">
                    <img src="images/platform-<?php echo $i;?>-icon.png">
                </div>
            </div>
        </div>
        
    <?php endfor ?>

    </section>

    <section class="connect container">

        <div class="connect_head">
            <h2>connect socially with us</h2>
        </div>
        
        <div class="connect_platform container">

        <?php for ($i=0; $i < 4; $i++): ?>
        <?php $connectNames = ["subscribe to discord", "watch on youtube", "watch on steam", "play with xbox live"] ?>
        <?php $connectIcons = ["discord", "youtube", "steam-square", "xbox"] ?>

            <div class="connect_<?php echo $connectIcons[$i];?> justify-content-center col-sm-4 col-lg-2">
                <a class="connect_<?php echo $connectIcons[$i];?>_icon" href="##5">
                    <div class="connect_<?php echo $connectIcons[$i];?>_platform">
                        <i id="discord_icon" class="fab fa-<?php echo $connectIcons[$i];?>"></i>
                    </div>
                </a>

                <div class="connect_<?php echo $connectIcons[$i];?>_para">
                    <a class="connect_para" href="##6"><?php echo $connectNames[$i];?></a>
                </div>
            </div>

        <?php endfor ?>

        </div>
    </section>

    <div class="fixed_background_img">

        <section class="collection">
            <div class="games_collection">
                <h1>collection</h1>
            </div>
            <div class="carousel-indicate container">
                <ol class="owl_indicators nav">
                    <li class="owl_indicator nav-item"><a class="text_indicator nav-link active" href="###4" onclick="image_change1()">popular</a></li>
                    <li class="owl_indicator nav-item"><a class="text_indicator nav-link" href="###5" onclick="image_change2()">new arrival</a></li>
                    <li class="owl_indicator nav-item"><a class="text_indicator nav-link" href="###6" onclick="image_change3()">best seller</a></li>
                    <li class="owl_indicator nav-item"><a class="text_indicator nav-link" href="###7" onclick="image_change4()">editor's pick</a></li>
                </ol>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img class="owl_img1" src="images/popular_1.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name1">call of duty cold war</span><br>
                            <span class="game_downloads game_downloads_1">1000000+ downloads</span>
                            <br><span class="game_rating game_rating_1"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" id="unchecked"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game1" href="pages/buy.php?game=call of duty cold war">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img2" src="images/popular_2.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name2">CS: global offensive</span><br>
                            <span class="game_downloads game_downloads_2">1020000+ downloads</span>
                            <br><span class="game_rating game_rating_2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" id="unchecked"></i><i class="fas fa-star" id="unchecked"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game2" href="pages/buy.php?game=counter strike">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img3" src="images/popular_3.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name3">cyberpunk 2077</span><br>
                            <span class="game_downloads game_downloads_3">950000+ downloads</span>
                            <br><span class="game_rating game_rating_3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game3" href="pages/buy.php?game=cyberpunk">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img4" src="images/popular_4.jfif">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name4">forza horizon 4</span><br>
                            <span class="game_downloads game_downloads_4">900000+ downloads</span>
                            <br><span class="game_rating game_rating_4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" id="unchecked"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game4" href="pages/buy.php?game=forza forizon 4">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img5" src="images/popular_5.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name5">call of duty MW</span><br>
                            <span class="game_downloads game_downloads_5">950000+ downloads</span>
                            <br><span class="game_rating game_rating_5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" id="unchecked"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game5" href="pages/buy.php?game=modern warfare">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img6" src="images/popular_6.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name6">tom clancy's: six siege</span><br>
                            <span class="game_downloads game_downloads_6">1000000+ downloads</span>
                            <br><span class="game_rating game_rating_6"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game6" href="pages/buy.php?game=six siege">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img7" src="images/popular_7.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name7">assassin's creed</span><br>
                            <span class="game_downloads game_downloads_7">1000000+ downloads</span>
                            <br><span class="game_rating game_rating_7"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game7" href="pages/buy.php?game=assassin creed">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img8" src="images/popular_8.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name8">watch dog 2</span><br>
                            <span class="game_downloads game_downloads_8">1000000+ downloads</span>
                            <br><span class="game_rating game_rating_8"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" id="unchecked"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game8" href="pages/buy.php?game=watch dog 2">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img9" src="images/popular_9.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name9">red dead redemption 2</span><br>
                            <span class="game_downloads game_downloads_9">1000000+ downloads</span>
                            <br><span class="game_rating game_rating_9"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game9" href="pages/buy.php?game=red dead redemption 2">download</a></button>
                    </div>
                </div>
                <div class="item">
                    <img class="owl_img10" src="images/popular_10.jpg">
                    <div class="item_details">
                        <p class="game_img_para">
                            <span class="game_img_name game_img_name10">fallout 3</span><br>
                            <span class="game_downloads game_downloads_10">860000+ downloads</span>
                            <br><span class="game_rating game_rating_10"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star" id="unchecked"></i></span>
                        </p>
                        <button class="download" type="button"><a class="download_game10" href="pages/buy.php?game=fallout 3">download</a></button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="normal_background">
        <div class="game_gallery">
            <p class="game_gallery_head">game gallery</p>
        </div>
        <div class="games_gallery">
            <?php for ($i=1; $i <= 12; $i++): ?>

                <div class='gallery_img' onmouseover="gallery_hover<?php echo $i;?>()" onmouseout="gallery_un_hover<?php echo $i;?>()" onclick="show<?php echo $i;?>()">
                    <a href="#_<?php echo $i;?>" data-toggle='modal' data-target='#myModal6'><img class="gallery_img_<?php echo $i;?>" src="images/editor-<?php echo $i;?>.jpg"></a>
                </div>
            
            
            <?php endfor ?>
            

        </div>
    </section>

    <section class="statistics">
        <div class="statistics_details container">
            <div class="stat_games col-6 col-lg-3">
                <img src="images/stats-1.png">
                <p class="stat_para">
                    <span class="counter">1000</span><br>
                    <span class="stat_text">gamers</span>
                </p>
            </div>
            <div class="stat_download col-6 col-lg-3">
                <img src="images/stats-2.png">
                <p class="stat_para">
                    <span class="counter">1250000</span><br>
                    <span class="stat_text">downloads</span>
                </p>
            </div>
            <div class="stat_follower col-6 col-lg-3">
                <img src="images/stats-3.png">
                <p class="stat_para">
                    <span class="counter">252000</span><br>
                    <span class="stat_text">followers</span>
                </p>
            </div>
            <div class="stat_online col-6 col-lg-3">
                <img src="images/stats-4.png">
                <p class="stat_para">
                    <span class="counter">160000</span><br>
                    <span class="stat_text">online</span>
                </p>
            </div>
        </div>
    </section>

    <section class="partner_section">
        <div class="partner">
            <div id="owl-partner" class="owl-carousel owl-theme">

            <?php for ($i=1; $i <= 20; $i++): ?>

                <div class="item">
                    <img src="images/partner-<?php echo $i; ?>.jpg">
                </div>

            <?php endfor ?>

            </div>
        </div>
    </section>

    <?php include("pages/footer.php"); ?>

    <div id="myModal1" class="modal fade modal1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="modal1_button" type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <video class="modal1_video col-12 col-xl-12" controls>
                        <source src="videos/Watch Dogs 2 Official Launch Trailer.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </div>

    <div id="myModal2" class="modal fade modal2" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="modal2_button" type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <video class="modal2_video col-12 col-xl-12" controls>
                        <source src="videos/Red Dead Redemption 2 PC Trailer.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </div>

    <div id="myModal3" class="modal fade modal3" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="modal3_button" type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <video class="modal3_video col-12 col-xl-12" controls>
                        <source src="videos/GTA V - PC Trailer - 1080p _ 60 fps.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </div>

    <div id="myModal4" class="modal fade modal4" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="modal4_button" type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <video class="modal4_video col-12 col-xl-12" controls>
                        <source src="videos/Need for Speed™ Heat Official Reveal Trailer.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </div>

    <div id="myModal5" class="modal fade modal5" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="modal5_button" type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <video class="modal5_video col-12 col-xl-12" controls>
                        <source src="videos/Official Launch Trailer - The Witcher 3- Wild Hunt.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
    </div>

    <div id="myModal6" class="modal fade modal6" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="modal6_button" type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="carousel" id="modal6">
                        <div class="carousel-inner" data-interval="false">
                            <div class="carousel-item game_gallery_modal1 active">
                                <img class="gallery_img1" src="" alt="">
                            </div>
                            <div class="carousel-item game_gallery_modal2">
                                <img class="gallery_img2" src="" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#modal6" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#modal6" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

</body>

</html>