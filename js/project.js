$(document).ready(function ($) {
    var n = window.location.pathname;
    console.log(n);
    $('.modal1_button').click(function () {
        $('.modal1_video').attr('src', '');
        $('.modal1_video').attr('src', '../videos/Watch Dogs 2 Official Launch Trailer.mp4');
    })

    $('.modal2_button').click(function () {
        $('.modal2_video').attr('src', '');
        $('.modal2_video').attr('src', '../videos/Red Dead Redemption 2 PC Trailer.mp4');
    })

    $('.modal3_button').click(function () {
        $('.modal3_video').attr('src', '');
        $('.modal3_video').attr('src', '../videos/GTA V - PC Trailer - 1080p _ 60 fps.mp4');
    })

    $('.modal4_button').click(function () {
        $('.modal4_video').attr('src', '');
        $('.modal4_video').attr('src', '../videos/Need for Speed™ Heat Official Reveal Trailer.mp4');
    })

    $('.modal5_button').click(function () {
        $('.modal5_video').attr('src', '');
        $('.modal5_video').attr('src', '../videos/Official Launch Trailer - The Witcher 3- Wild Hunt.mp4');
    })

    $('.disable-select').css("user-select", "none");

    $('.back').click(function () {
        window.history.back();
    })

    if (n == "/GS/index.php" || n == "/GS/") {
        
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: 3000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

        $("#owl-partner").owlCarousel({
            navigation: true,
        });


        $('.owl-carousel').on('hover', function (e) {
            owl.trigger('stop.owl.autoplay', [false])
        });
    }

    $('.text_indicator').on('click', function () {
        $('.text_indicator').removeClass('active');
        $(this).addClass('active');
    });

    $('.nav-link').on('click', function () {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });

    $('.select_all').click(function () {
        $('.select_all').removeClass('active');
        $(this).addClass('active');
    });

    $('.item-search').click(function () {
        $('.dropdown-menu-main').css('display', 'block');
    });

    if ($('.game_more_1').attr('src') == "images/") {
        $('.game_more_link1').remove();
    }

    if ($('.game_more_2').attr('src') == "images/") {
        $('.game_more_link2').remove();
    }

    if ($('.game_more_3').attr('src') == "images/") {
        $('.game_more_link3').remove();
    }

    if ($('.game_more_4').attr('src') == "images/") {
        $('.game_more_link4').remove();
    }

    if ($('.cat_1').text() == "0") {
        $('.cat_1').remove();
    }

    if ($('.cat_2').text() == "0") {
        $('.cat_2').remove();
    }

    if ($('.cat_3').text() == "0") {
        $('.cat_3').remove();
    }

    var link = window.location.href;
    var split = new URL(link);
    var search = split.searchParams.get("search");
    var blog = split.searchParams.get("blog");
    var rate = split.searchParams.get("rate");

    if (search != null) {
        $('#' + search).prop('checked', 'true');
    }

    if (blog != null) {
        $('#' + blog).prop('checked', 'true');
    }

    if (rate != null) {
        $('#' + rate).prop('checked', 'true');
    }
});

function scroll() {
    var scroll = $(window).scrollTop();
    var width = window.outerWidth;
    if (scroll > 200) {
        $('.navbar').css({ "position": "sticky", "z-index": "10", "background-color": "black", "top": "0", "width": "100%" });
        $('.nav-link').css('color', 'white');
        $('.nav-link.active').css('color', '#55acee');
        $('.user').css({ 'color': 'white' });
    } else if (scroll < 200) {
        $('.navbar').css({ "position": "relative", "z-index": "10", "background-color": "white", "top": "0", "width": "100%" })
        $('.nav-link').css('color', 'black');
        $('.nav-link.active').css('color', '#55acee');
        $('.user').css({ 'color': 'black' });
    }

    if (width < 768) {
        $('.nav-item.dropdown').css({ 'display': 'block!important' });
    }

    if (width > 768) {
        $('.nav-item.dropdown').css({ 'display': 'flex!important' });
    }
}

function scroll1() {
    var scroll = $(window).scrollTop();
    if (scroll > 200) {
        $('.navbar').css({ "position": "sticky", "z-index": "10", "top": "0", "width": "100%" });
    } else if (scroll < 200) {
        $('.navbar').css({ "position": "relative", "z-index": "10", "top": "0", "width": "100%" });
    }
}

function width() {
    var width = window.innerWidth;
    if (width < 1200) {
        $('.nav-link.logo>img').attr('src', '../images/gamerland-logo-big-text.png');
    } else if (width > 1200) {
        $('.nav-link.logo>img').attr('src', '../images/gamerland-logo-big-light.png');
    }

    if (width > 992) {
        $('.cat-collapse.container').css({ 'display': 'none' });
        $('.game_store.collapse').addClass("show");
    } else if (width < 992) {
        $('.cat-collapse.container').css({ 'display': 'flex' });
        $('.game_store.collapse').removeClass("show");
    }
}

function call_of_duty() {
    $("#game-color-black0").html("call");
    $("#game-color-white0").html(" of duty");
    $("#refferance-img0").attr({ "src": "../images/Call-of-Duty.jpg", 'alt': "Call of Duty Modern Warfare", "title": "Call of Duty Modern Warfare" });
    $("#refferance-img1").attr({ "src": "../images/cod_black_ops_1920x1080.jpg", 'alt': "Call of Duty Black OPS", "title": "Call of Duty Black OPS" });
    $("#refferance-img2").attr({ "src": "../images/cod_black_ops_cold_war_1920x1080.jpg", 'alt': "Call of Duty Cold War", "title": "Call of Duty Black OPS Cold War" });
    $('#game-buy-link').attr('href', 'buy.php?game=call of duty modern warfare');

    $(".change_reff0").attr({ 'href': 'buy.php?game=Call of Duty Modern Warfare' });
    $(".change_reff1").attr({ 'href': 'buy.php?game=Call of Duty Black OPS' });
    $(".change_reff2").attr({ 'href': 'buy.php?game=Call of Duty Cold War' });
}

function gear_of_war() {
    $("#game-color-black0").html("gear");
    $("#game-color-white0").html(" of war");
    $("#refferance-img0").attr({ "src": "../images/gear-of-war_judgement.jpg", 'alt': "Gears of War Judgement", "title": "Gears of War Judgement" });
    $("#refferance-img1").attr({ "src": "../images/gear-of-war3_1920x1080.jpg", 'alt': "Gears of War 3", "title": "Gears of War 3" });
    $("#refferance-img2").attr({ "src": "../images/gears_5.jpg", 'alt': "Gears of War 5", "title": "Gears of War 5" });
    $(".change_reff0").attr({ 'href': 'buy.php?game=Gears of War Judgement' });
    $(".change_reff1").attr({ 'href': 'buy.php?game=Gears of War 3' });
    $(".change_reff2").attr({ 'href': 'buy.php?game=Gears of War 5' });
    $('#game-buy-link').attr('href', 'buy.php?game=gears of war 4');
}

function battlefield() {
    $("#game-color-black0").html("battlefield");
    $("#game-color-white0").html(" 5");
    $("#refferance-img0").attr({ "src": "../images/battlefield_1_1920x1080.jpg", 'alt': "Battlefield 1", "title": "Battlefield 1" });
    $("#refferance-img1").attr({ "src": "../images/battlefield_3_1920x1080.jpg", 'alt': "Battlefield 3", "title": "Battlefield 3" });
    $("#refferance-img2").attr({ "src": "../images/battlefield_4_1920x1080.jpg", 'alt': "Battlefield 4", "title": "Battlefield 4" });
    $('#game-buy-link').attr('href', 'buy.php?game=battlefield 5');

    $(".change_reff0").attr({ 'href': 'buy.php?game=Battlefield 1' });
    $(".change_reff1").attr({ 'href': 'buy.php?game=Battlefield 3' });
    $(".change_reff2").attr({ 'href': 'buy.php?game=Battlefield 4' });
}


function hover1() {
    $('.hidden_platform_detail_1').css({ "top": "0", "transform": "rotateZ(0deg)" })
    $('.hidden_head_1').css({ "right": "0", "transition": "0.8s", "position": "absolute", "transition-delay": "1.5s" })
    $('.platform_hid_image_1').css({ "right": "0", "transition": "0.8s", "position": "absolute", "transition-delay": "1.8s" })
}

function un_hover1() {
    $('.hidden_platform_detail_1').css({ "top": "-100%", "transform": "rotateZ(360deg)" })
    $('.hidden_head_1, .platform_hid_image_1').css({ "right": "-100%", "transition": "0.8s", "position": "absolute" })
}

function hover2() {
    $('.hidden_platform_detail_2').css({ "top": "0", "transform": "rotateZ(0deg)" })
    $('.hidden_head_2').css({ "right": "0", "transition": "0.8s", "position": "absolute", "transition-delay": "1.5s" })
    $('.platform_hid_image_2').css({ "right": "0", "transition": "0.8s", "position": "absolute", "transition-delay": "1.8s" })
}

function un_hover2() {
    $('.hidden_platform_detail_2').css({ "top": "-100%", "transform": "rotateZ(360deg)" })
    $('.hidden_head_2, .platform_hid_image_2').css({ "right": "-100%", "transition": "0.8s", "position": "absolute" })
}

function hover3() {
    $('.hidden_platform_detail_3').css({ "top": "0", "transform": "rotateZ(0deg)" })
    $('.hidden_head_3').css({ "right": "0", "transition": "0.8s", "position": "absolute", "transition-delay": "1.5s" })
    $('.platform_hid_image_3').css({ "right": "0", "transition": "0.8s", "position": "absolute", "transition-delay": "1.8s" })
}

function un_hover3() {
    $('.hidden_platform_detail_3').css({ "top": "-100%", "transform": "rotateZ(360deg)" })
    $('.hidden_head_3, .platform_hid_image_3').css({ "right": "-100%", "transition": "0.8s", "position": "absolute" })
}

function hover4() {
    $('.hidden_platform_detail_4').css({ "top": "0", "transform": "rotateZ(0deg)" })
    $('.hidden_head_4').css({ "right": "0", "transition": "0.8s", "position": "absolute", "transition-delay": "1.5s" })
    $('.platform_hid_image_4').css({ "right": "0", "transition": "0.8s", "position": "absolute", "transition-delay": "1.8s" })
}

function un_hover4() {
    $('.hidden_platform_detail_4').css({ "top": "-100%", "transform": "rotateZ(360deg)" })
    $('.hidden_head_4, .platform_hid_image_4').css({ "right": "-100%", "transition": "0.8s", "position": "absolute" })
}

function image_change1() {
    $('.owl-carousel .owl_img1').attr("src", "../images/popular_1.jpg")
    $('.owl-carousel .owl_img2').attr("src", "../images/popular_2.jpg")
    $('.owl-carousel .owl_img3').attr("src", "../images/popular_3.jpg")
    $('.owl-carousel .owl_img4').attr("src", "../images/popular_4.jfif")
    $('.owl-carousel .owl_img5').attr("src", "../images/popular_5.jpg")
    $('.owl-carousel .owl_img6').attr("src", "../images/popular_6.jpg")
    $('.owl-carousel .owl_img7').attr("src", "../images/popular_7.jpg")
    $('.owl-carousel .owl_img8').attr("src", "../images/popular_8.jpg")
    $('.owl-carousel .owl_img9').attr("src", "../images/popular_9.jpg")
    $('.owl-carousel .owl_img10').attr("src", "../images/popular_10.jpg")

    $('.game_img_name1').html('call of duty cold war')
    $('.game_img_name2').html('CS: global offensive')
    $('.game_img_name3').html('cyberpunk 2077')
    $('.game_img_name4').html('forza horizon 4')
    $('.game_img_name5').html('call of duty MW')
    $('.game_img_name6').html('tom clancy: six siege')
    $('.game_img_name7').html('assassin creed')
    $('.game_img_name8').html('watch dog II')
    $('.game_img_name9').html('red dead redemption II')
    $('.game_img_name10').html('fallout 3')

    $('.game_downloads_1').html('1000000+ downloads')
    $('.game_downloads_2').html('1020000+ downloads')
    $('.game_downloads_3').html('950000+ downloads')
    $('.game_downloads_4').html('900000+ downloads')
    $('.game_downloads_5').html('950000+ downloads')
    $('.game_downloads_6').html('1000000+ downloads')
    $('.game_downloads_7').html('1000000+ downloads')
    $('.game_downloads_8').html('1000000+ downloads')
    $('.game_downloads_9').html('1100000+ downloads')
    $('.game_downloads_10').html('860000+ downloads')

    $('.item .download_game1').attr('href', 'buy.php?game=call of duty cold war');
    $('.item .download_game2').attr('href', 'buy.php?game=counter strike');
    $('.item .download_game3').attr('href', 'buy.php?game=cyberpunk');
    $('.item .download_game4').attr('href', 'buy.php?game=forza forizon 4');
    $('.item .download_game5').attr('href', 'buy.php?game=modern warfare');
    $('.item .download_game6').attr('href', 'buy.php?game=six siege');
    $('.item .download_game7').attr('href', 'buy.php?game=assassin creed');
    $('.item .download_game8').attr('href', 'buy.php?game=watch dog 2');
    $('.item .download_game0').attr('href', 'buy.php?game=red dead redemption 2');
    $('.item .download_game10').attr('href', 'buy.php?game=fallout 3');
}

function image_change2() {
    $('.owl-carousel .owl_img1').attr("src", "../images/new_arrival_1.jpg") //resident evil
    $('.owl-carousel .owl_img2').attr("src", "../images/new_arrival_2.jfif") //far cry 6
    $('.owl-carousel .owl_img3').attr("src", "../images/new_arrival_3.jpg") //back 4 blood
    $('.owl-carousel .owl_img4').attr("src", "../images/new_arrival_4.jpg") //horizon forbidden
    $('.owl-carousel .owl_img5').attr("src", "../images/new_arrival_5.jpeg") //halo infinite
    $('.owl-carousel .owl_img6').attr("src", "../images/new_arrival_6.jpg") //hitman 3
    $('.owl-carousel .owl_img7').attr("src", "../images/new_arrival_7.jpg") //doom eternel
    $('.owl-carousel .owl_img8').attr("src", "../images/new_arrival_8.jpg") //outriders
    $('.owl-carousel .owl_img9').attr("src", "../images/new_arrival_9.jpg") //Resident Evil 3
    $('.owl-carousel .owl_img10').attr("src", "../images/new_arrival_10.jfif") //Watch Dogs: Legion

    $('.game_img_name1').html('resident evil')
    $('.game_img_name2').html('far cry 6')
    $('.game_img_name3').html('back 4 blood')
    $('.game_img_name4').html('horizon forbidden')
    $('.game_img_name5').html('halo infinite')
    $('.game_img_name6').html('hitman III')
    $('.game_img_name7').html('doom eternel')
    $('.game_img_name8').html('outriders')
    $('.game_img_name9').html('Resident Evil III')
    $('.game_img_name10').html('Watch Dogs: Legion')

    $('.game_downloads_1').html('1010000+ downloads')
    $('.game_downloads_2').html('1200000+ downloads')
    $('.game_downloads_3').html('990000+ downloads')
    $('.game_downloads_4').html('930000+ downloads')
    $('.game_downloads_5').html('950000+ downloads')
    $('.game_downloads_6').html('1000000+ downloads')
    $('.game_downloads_7').html('1300000+ downloads')
    $('.game_downloads_8').html('1000000+ downloads')
    $('.game_downloads_9').html('1100000+ downloads')
    $('.game_downloads_10').html('1060000+ downloads')

    $('.item .download_game1').attr('href', 'buy.php?game=resident evil');
    $('.item .download_game2').attr('href', 'buy.php?game=far cry 6');
    $('.item .download_game3').attr('href', 'buy.php?game=back 4 blood');
    $('.item .download_game4').attr('href', 'buy.php?game=horizon forbidden');
    $('.item .download_game5').attr('href', 'buy.php?game=halo infinite');
    $('.item .download_game6').attr('href', 'buy.php?game=hitman 3');
    $('.item .download_game7').attr('href', 'buy.php?game=doom eternel');
    $('.item .download_game8').attr('href', 'buy.php?game=outriders');
    $('.item .download_game0').attr('href', 'buy.php?game=Resident Evil 3');
    $('.item .download_game10').attr('href', 'buy.php?game=Watch Dogs Legion');
}

function image_change3() {
    $('.owl-carousel .owl_img1').attr("src", "../images/best_seller_1.jpg") //the last of us ii
    $('.owl-carousel .owl_img2').attr("src", "../images/best_seller_2.jpg") //Assassin's Creed Valhalla
    $('.owl-carousel .owl_img3').attr("src", "../images/best_seller_3.jpg") //Call of Duty: Black Ops cold war
    $('.owl-carousel .owl_img4').attr("src", "../images/best_seller_4.jfif") //Spider-Man: Miles Morales
    $('.owl-carousel .owl_img5').attr("src", "../images/best_seller_5.jpg") //little nightmares ii
    $('.owl-carousel .owl_img6').attr("src", "../images/best_seller_6.jpg") //Grand Theft Auto V
    $('.owl-carousel .owl_img7').attr("src", "../images/best_seller_7.jpg") //	Red Dead Redemption 2
    $('.owl-carousel .owl_img8').attr("src", "../images/best_seller_8.jpg") //Call of Duty: Modern Warfare 3
    $('.owl-carousel .owl_img9').attr("src", "../images/best_seller_9.jpg") //The Elder Scrolls V: Skyrim
    $('.owl-carousel .owl_img10').attr("src", "../images/best_seller_10.jpg") //The Walking Dead: Saints and Sinners

    $('.game_img_name1').html('the last of us II')
    $('.game_img_name2').html('Assassin Creed Valhalla')
    $('.game_img_name3').html('Call of Duty cold war')
    $('.game_img_name4').html('Spider-Man')
    $('.game_img_name5').html('little nightmares II')
    $('.game_img_name6').html('Grand Theft Auto V')
    $('.game_img_name7').html('Red Dead Redemption II')
    $('.game_img_name8').html('Call of Duty: MW3')
    $('.game_img_name9').html('Skyrim')
    $('.game_img_name10').html('The Walking Dead')

    $('.game_downloads_1').html('1000000+ downloads')
    $('.game_downloads_2').html('1000000+ downloads')
    $('.game_downloads_3').html('1200000+ downloads')
    $('.game_downloads_4').html('900000+ downloads')
    $('.game_downloads_5').html('950000+ downloads')
    $('.game_downloads_6').html('1350000+ downloads')
    $('.game_downloads_7').html('1300000+ downloads')
    $('.game_downloads_8').html('1000000+ downloads')
    $('.game_downloads_9').html('950000+ downloads')
    $('.game_downloads_10').html('900000+ downloads')

    $('.item .download_game1').attr('href', 'buy.php?game=the last of us 2');
    $('.item .download_game2').attr('href', 'buy.php?game=assassin creed valhalla');
    $('.item .download_game3').attr('href', 'buy.php?game=Call of Duty cold war');
    $('.item .download_game4').attr('href', 'buy.php?game=Spider-Man');
    $('.item .download_game5').attr('href', 'buy.php?game=little nightmares 2');
    $('.item .download_game6').attr('href', 'buy.php?game=gta 5');
    $('.item .download_game7').attr('href', 'buy.php?game=Red Dead Redemption 2');
    $('.item .download_game8').attr('href', 'buy.php?game=Call of Duty modern warfare 3');
    $('.item .download_game0').attr('href', 'buy.php?game=Skyrim');
    $('.item .download_game10').attr('href', 'buy.php?game=the walking dead');
}

function image_change4() {
    $('.owl-carousel .owl_img1').attr("src", "../images/editor_choice_1.jpg") //the medium
    $('.owl-carousel .owl_img2').attr("src", "../images/editor_choice_2.jpg") //hitman 3
    $('.owl-carousel .owl_img3').attr("src", "../images/editor_choice_3.jfif") //tony hawk's pro skater 1 + 2
    $('.owl-carousel .owl_img4').attr("src", "../images/editor_choice_4.jpg") //death stranding
    $('.owl-carousel .owl_img5').attr("src", "../images/editor_choice_5.jfif") //mortal kombat 11
    $('.owl-carousel .owl_img6').attr("src", "../images/editor_choice_6.jpg") //devil may cry 5
    $('.owl-carousel .owl_img7').attr("src", "../images/editor_choice_7.jpg") //resident evil 2
    $('.owl-carousel .owl_img8').attr("src", "../images/editor_choice_8.jpg") //need for speed payback
    $('.owl-carousel .owl_img9').attr("src", "../images/editor_choice_9.jpg") //battlefield 3
    $('.owl-carousel .owl_img10').attr("src", "../images/editor_choice_10.jfif") //gears of war 2

    $('.game_img_name1').html('the medium')
    $('.game_img_name2').html('hitman III')
    $('.game_img_name3').html('tony hawk skater')
    $('.game_img_name4').html('death stranding')
    $('.game_img_name5').html('mortal kombat II')
    $('.game_img_name6').html('devil may cry IV')
    $('.game_img_name7').html('resident evil II')
    $('.game_img_name8').html('NFS payback')
    $('.game_img_name9').html('battlefield III')
    $('.game_img_name10').html('gears of war II')

    $('.game_downloads_1').html('900000+ downloads')
    $('.game_downloads_2').html('1000000+ downloads')
    $('.game_downloads_3').html('950000+ downloads')
    $('.game_downloads_4').html('900000+ downloads')
    $('.game_downloads_5').html('1100000+ downloads')
    $('.game_downloads_6').html('1000000+ downloads')
    $('.game_downloads_7').html('1000000+ downloads')
    $('.game_downloads_8').html('1000000+ downloads')
    $('.game_downloads_9').html('1100000+ downloads')
    $('.game_downloads_10').html('1150000+ downloads')

    $('.item .download_game1').attr('href', 'buy.php?game=the medium');
    $('.item .download_game2').attr('href', 'buy.php?game=hitman 3');
    $('.item .download_game3').attr('href', 'buy.php?game=tony hawk skater');
    $('.item .download_game4').attr('href', 'buy.php?game=death stranding');
    $('.item .download_game5').attr('href', 'buy.php?game=mortal kombat 11');
    $('.item .download_game6').attr('href', 'buy.php?game=devil may cry 4');
    $('.item .download_game7').attr('href', 'buy.php?game=resident evil 2');
    $('.item .download_game8').attr('href', 'buy.php?game=NFS payback');
    $('.item .download_game0').attr('href', 'buy.php?game=battlefield 3');
    $('.item .download_game10').attr('href', 'buy.php?game=gears of war 3');
}

for (let index = 1; index <= 12; index++) {
    function gallery_hover1() {
        $('.gallery_img_${index}').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
        $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
    }

}
function gallery_hover1() {
    $('.gallery_img_1').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover1() {
    $('.gallery_img_1').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover2() {
    $('.gallery_img_2').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover2() {
    $('.gallery_img_2').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover3() {
    $('.gallery_img_3').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover3() {
    $('.gallery_img_3').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover4() {
    $('.gallery_img_4').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover4() {
    $('.gallery_img_4').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover5() {
    $('.gallery_img_5').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover5() {
    $('.gallery_img_5').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover6() {
    $('.gallery_img_6').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover6() {
    $('.gallery_img_6').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover7() {
    $('.gallery_img_7').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover7() {
    $('.gallery_img_7').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover8() {
    $('.gallery_img_8').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover8() {
    $('.gallery_img_8').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover9() {
    $('.gallery_img_9').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover9() {
    $('.gallery_img_9').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover10() {
    $('.gallery_img_10').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover10() {
    $('.gallery_img_10').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover11() {
    $('.gallery_img_11').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover11() {
    $('.gallery_img_11').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_hover12() {
    $('.gallery_img_12').css({ "transform": "scale(1)", "transition": "all 0.5s", "filter": "brightness(0.8)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(330px) scale(1.1)", "transition": "all 0.5s" })
}

function gallery_un_hover12() {
    $('.gallery_img_12').css({ "transform": "scale(1.1)", "transition": "all 0.5s", "filter": "brightness(1)" })
    $('.gallery_img::after').css({ "transform": "rotate(45deg) translateY(-300px) scale(1.1)", "transition": "all 0.5s" })
}

function down_up() {
    $('.dark_bg_img').css({ "transform": "translateY(0px)", "transition": "all 0.5s" });
    $('.orange_bg').css({ "transform": "translateY(0px)", "transition": "all 0.5s", "transition-delay": "0.6s" });
    $('.main_bg').css({ "transform": "translateY(0px)", "transition": "all 0.5s", "transition-delay": "0.8s" })
}

function change1() {
    var store = $('.game_more_1').attr('src');
    $('.game_img0').attr('src', store);
}

function change2() {
    var store = $('.game_more_2').attr('src');
    $('.game_img0').attr('src', store);
}

function change3() {
    var store = $('.game_more_3').attr('src');
    $('.game_img0').attr('src', store);
}

function change4() {
    var store = $('.game_more_4').attr('src');
    $('.game_img0').attr('src', store);
}

function toggle1() {
    $('.platform_start').toggle(function () {
        if ($('.platform_start').css('display') === 'block') {
            $('.platform_plus').html('-');
        } else {
            $('.platform_plus').html('+');
        }
    });
}

function toggle2() {
    $('.category_start').toggle(function () {
        if ($('.category_start').css('display') === 'block') {
            $('.category_plus').html('-');
        } else {
            $('.category_plus').html('+');
        }
    });
}

function toggle3() {
    $('.brand_start').toggle(function () {
        if ($('.brand_start').css('display') === 'block') {
            $('.brand_plus').html('-');
        } else {
            $('.brand_plus').html('+');
        }
    });
}

function toggle4() {
    $('.amount_start').toggle(function () {
        if ($('.amount_start').css('display') === 'block') {
            $('.amount_plus').html('-');
        } else {
            $('.amount_plus').html('+');
        }
    });
}

function toggle5() {
    $('.rating_start').toggle(function () {
        if ($('.rating_start').css('display') === 'block') {
            $('.rating_plus').html('-');
        } else {
            $('.rating_plus').html('+');
        }
    });
}

function show1() {
    $('.gallery_img1').attr({ 'src': 'images/editor_choice_8.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/payback.jpg' });
}

function show2() {
    $('.gallery_img1').attr({ 'src': 'images/editor-2.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/diablo.jpg' });
}

function show3() {
    $('.gallery_img1').attr({ 'src': 'images/walking-dead1.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/walking-dead.jpg' });
}

function show4() {
    $('.gallery_img1').attr({ 'src': 'images/editor-4.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/lotr.jpg' });
}

function show5() {
    $('.gallery_img1').attr({ 'src': 'images/editor-5.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/lou-winter.jpg' });
}

function show6() {
    $('.gallery_img1').attr({ 'src': 'images/editor-6.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/splinter-1.jpg' });
}

function show7() {
    $('.gallery_img1').attr({ 'src': 'images/editor-7.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/siege-6.jpg' });
}

function show8() {
    $('.gallery_img1').attr({ 'src': 'images/editor-8.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/cod-ghost-1.jpg' });
}

function show9() {
    $('.gallery_img1').attr({ 'src': 'images/editor-9.jpg' });
    $('.gallery_img2').attr({ 'src': 'images/sub-zero.jpg' });
}

function show10() {
    $('.gallery_img1').attr({ 'src': 'images/editor-10.jpg' });
    $('.gallery_img2').attr({ 'src': '', 'alt': '' });
}

function show11() {
    $('.gallery_img1').attr({ 'src': 'images/editor-11.jpg' });
    $('.gallery_img2').attr({ 'src': 'sejuani.png' });
}

function show12() {
    $('.gallery_img1').attr({ 'src': 'images/editor-12.jpg' });
    $('.gallery_img2').attr({ 'src': 'redux.jpg' });
}

function dropdown() {
    $('.dropdown-menu-main').toggle();
}

function del() {
    var name = $("#r-name").val();
    $.post("cart", { name: name },
        function (data) {
            $('#results').html(data);
            $('#myForm')[0].reset();
        });
}

var x = [
    ['call of duty cold war', '1000000+ downloads', 5, 'popular_1.jpg'],
    ['CS: global offensive', '1020000+ downloads', 5, 'popular_2.jpg'],
    ['cyberpunk 2077', '950000+ downloads', 5, 'popular_3.jpg'],
    ['forza horizon 4', '900000+ downloads', 5, 'popular_4.jfif'],
    ['call of duty MW', '950000+ downloads', 5, 'popular_5.jpg'],
    ['tom clancy: six siege', '1000000+ downloads', 5, 'popular_6.jpg'],
    ['assassin creed', '1000000+ downloads', 5, 'popular_7.jpg'],
    ['watch dog 2', '1000000+ downloads', 5, 'popular_8.jpg'],
    ['red dead redemption 2', '1000000+ downloads', 5, 'popular_9.jpg'],
    ['fallout 3', '800000+ downloads', 5, 'popular_10.jpg'],
]
