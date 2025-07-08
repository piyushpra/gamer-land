<?php

if(!isset($_SESSION))
{
    session_start();
}

include("file_add_check.php");
?>

<nav class="navbar navbar-expand-md" onscroll="scroll1()">
    <li class="nav-item0">
        <a class="nav-link0 logo0" href="project.html"><img src="<?php echo $address; ?>images/gamerland-logo-big-light.png"></a>
    </li>
    <span class="navbar-toggler" data-toggle="collapse" data-target="#collapse_bar">
        <button class="nav_3bar"><i class="fas fa-bars"></i></button>
    </span>
    <ul class="user_profile dropdown">
        <a href="#10" class="user" data-toggle="dropdown">
            <span class="user_icon">
                <span class="caret"></span>
            </span>
            <span id="profile_icon">
                <i class="fas fa-user"></i>
            </span>
        </a>
        <div class="dropdown-menu profile_menu">
            <?php

            if (session_status() == PHP_SESSION_ACTIVE) {
                if (isset($_SESSION['username'])) {
                    $get = "welcome ".$_SESSION['username'];
                    echo "<span class='welcome-back dropdown-header'>";
                    echo $get;
                    echo "</span>";
                    echo "<div class='dropdown-divider'></div>";
                }
            }
            ?>
            <a href="<?php if(isset($_SESSION['username']) && isset($_SESSION['mail'])){echo "profile";} else{echo "pages/register";} ?>" class="dropdown-item">profile</a>
            <a href="<?php if(isset($_SESSION['username']) && isset($_SESSION['mail'])){echo "setting";} else{echo "pages/register";} ?>" class="dropdown-item">setting</a>
            <a href="<?php if(isset($_SESSION['username']) && isset($_SESSION['mail'])){echo "cart";} else{echo "pages/register";} ?>" class="dropdown-item">cart <?php if(isset($_SESSION['username']) && isset($_SESSION['mail']) && isset($_SESSION['cart'])){ $c = $_SESSION['cart']; echo "<span class='badge'>$c</span>";} else{echo "";} ?></a>
            <a href="pages/store?all=1" class="dropdown-item">purchase <?php if(isset($_SESSION['count_p'])){ $p = $_SESSION['count_p']; echo "<span class='badge'>$p</span>";} else{echo "";} ?></a>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<a class='logout' href='logout' title='logout'><h5><i class='fas fa-power-off'></i> logout</h5></a>";
            }
            ?>
        </div>
    </ul>
    <div class="collapse navbar-collapse" id="collapse_bar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php echo "$active5"; ?>" href="<?php if($file == "index.php"){ echo "index.php";} else {echo "../index.php";} ?>">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo "$active1"; ?>" href="<?php echo $page; ?>store?all=1">STORE</a>
            </li>
            <li class="nav-item dropdown">
                <div class="category_drop">
                    <a class="nav-link" href="#" data-toggle="dropdown">CATEGORY</a>
                    <div class="dropdown-menu">
                        <a href="store.php?search=action" class="dropdown-item">action</a>
                        <a href="store.php?search=adventure" class="dropdown-item">adventure</a>
                        <a href="store.php?search=arcade" class="dropdown-item">arcade</a>
                        <a href="store.php?search=fighting" class="dropdown-item">fighting</a>
                        <a href="store.php?search=horror" class="dropdown-item">horror</a>
                        <a href="store.php?search=puzzle" class="dropdown-item">puzzle</a>
                        <a href="store.php?search=racing" class="dropdown-item">racing</a>
                        <a href="store.php?search=shooting" class="dropdown-item">shooting</a>
                        <a href="store.php?search=simulation" class="dropdown-item">simulation</a>
                        <a href="store.php?search=sports" class="dropdown-item">sports</a>
                        <a href="store.php?search=war" class="dropdown-item">war</a>
                        <a href="store.php?search=strategy" class="dropdown-item">strategy</a>
                        <a href="store.php?search=mystery" class="dropdown-item">mystery</a>
                        <a href="store.php?search=fantasy" class="dropdown-item">fantasy</a>
                        <a href="store.php?search=sci-fi" class="dropdown-item">sci-fi</a>
                        <a href="store.php?search=rpg" class="dropdown-item">rpg</a>
                        <a href="store.php?search=survival" class="dropdown-item">survival</a>
                        <a href="store.php?search=stealth" class="dropdown-item">stealth</a>
                    </div>
                </div>
            </li>
            <li class="nav-item logo">
                <a class="nav-link logo" href="<?php if($file == "index.php"){ echo "index.php";} else {echo "../index.php";} ?>"><img src="<?php echo $address; ?>images/gamerland-logo-big-light.png"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo "$active2"; ?>" href="<?php echo $page; ?>blog">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo "$active3"; ?>" href="<?php echo $page; ?>contact">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo "$active4"; ?>" href="<?php echo $page; ?>register">REGISTER/LOGIN</a>
            </li>
        </ul>
    </div>
</nav>
