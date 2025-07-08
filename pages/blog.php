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

    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/project.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="disable" onscroll="scroll1()">
    <?php include("header.php"); ?>
    <section class="blog-main-head container">
        <p class="display-3">blog</p>
    </section>
    <section class="sections">
        <div class="section container">
            <div class="blog_category">
                <div class="fixed-div">
                    <form method="GET" class="term-form">
                        <input class="search-by-term" type="text" name="blog" placeholder="Search by term">
                        <button class="search-by-button" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="blog-type">
                        <h4>blog by term</h4>
                        <hr>
                        <div class="cats">
                            <a href="blog.php?blog=all" class="blog-cat"><input id="all" type="checkbox"> all</a>
                            <a href="blog.php?blog=announcement" class="blog-cat"><input id="announcement" type="checkbox"> announcement</a>
                            <a href="blog.php?blog=released" class="blog-cat"><input id="released" type="checkbox"> released</a>
                            <a href="blog.php?blog=update" class="blog-cat"><input id="update" type="checkbox"> update</a>
                        </div>
                    </div>
                    <div class="popular-blogs">
                        <h4 class="popular-blog-head">popular news</h4>
                        <hr>
                        <?php

                        $dbhost = "127.0.0.1";
                        $dbuser = "root";
                        $dbpass = "";
                        $db = "blog";

                        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

                        $query = "SELECT * FROM `popular-blog`";
                        $run = mysqli_query($conn, $query);

                        while ($store = mysqli_fetch_assoc($run)) {
                            $_name = $store['Post-Name'];
                            $_src = $store['Source'];
                            $_date = $store['Date'];

                            echo "
                        <a href='blog.php?blog=$_name' class='popular-blog-visit'>
                            <div class='popular-blog-box'>
                                <div class='popular-blog-img'>
                                    <img class='img-by-popular-blog' src='$_src'>
                                </div>
                                <div class='popular-blog-view'>
                                    <h5 class='popular-blog-name'>$_name</h5>
                                    <span class='popular-blog-date'><span class='glyphicon glyphicon-calendar'></span> $_date</span>
                                </div>
                            </div>
                        </a>
                        ";
                        }


                        ?>
                    </div>
                </div>
            </div>
            <div class="blogs">
                <?php

                $dbhost = "127.0.0.1";
                $dbuser = "root";
                $dbpass = "";
                $db = "blog";

                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

                if (!isset($_GET['blog']) || $_GET['blog'] == "all" || $_GET['blog'] == "") {
                    $sql = "SELECT * FROM `user-blog` LIMIT 15";
                    $run = mysqli_query($conn, $sql);

                    while ($store = mysqli_fetch_assoc($run)) {
                        $_pname = $store['Post-Name'];
                        $_src = $store['Source'];
                        $_desc = $store['Detail'];
                        $_time = $store['Date'];

                        echo "
                        <a class='blog-card col-12 col-xl-12' href=''>
                            <div class='blog-box'>
                                <div class='blog-by-img'>
                                    <img class='blog-img' src='$_src'>
                                </div>
                                <div class='blog-by-details'>
                                    <h3 class='blog-head'>$_pname</h3>
                                    <p class='blog-para'>$_desc</p>
                                </div>
                                <div class='blog-read-more-date'>
                                    <button href='##' class='read-blog'>read more</button>
                                    <span class='blog-post-time'><i class='far fa-clock'></i> $_time</span>
                                </div>
                            </div>
                        </a>    
                        ";
                    }
                }

                else if (isset($_GET['blog']) && $_GET['blog'] != "") {
                    $_post = $_GET['blog'];
                    $short = ucwords($_post);
                    $big = strtolower($_post);
                    $sql = "SELECT * FROM `user-blog` WHERE `Post-Name` LIKE '%$short%' OR `Post-Name` LIKE '%$big%' LIMIT 15";
                    $run = mysqli_query($conn, $sql);

                    while ($store = mysqli_fetch_assoc($run)) {
                        $_pname = $store['Post-Name'];
                        $_src = $store['Source'];
                        $_desc = $store['Detail'];
                        $_time = $store['Date'];

                        echo "
                        <a class='blog-card col-12 col-xl-12' href=''>
                            <div class='blog-box'>
                                <div class='blog-by-img'>
                                    <img class='blog-img' src='$_src'>
                                </div>
                                <div class='blog-by-details'>
                                    <h3 class='blog-head'>$_pname</h3>
                                    <p class='blog-para'>$_desc</p>
                                </div>
                                <div class='blog-read-more-date'>
                                    <button href='##' class='read-blog'>read more</button>
                                    <span class='blog-post-time'><i class='far fa-clock'></i> $_time</span>
                                </div>
                            </div>
                        </a>";
                    }
                }

                ?>
            </div>
        </div>
    </section>
</body>

</html>