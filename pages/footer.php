<?php
if(!isset($_SESSION))
{
    session_start();
}
include("file_add_check.php");
?>

<footer>
    <div class="subscribe container">
        <div class="subscribe_with_email">
            <div class="subscribe_head">
                <p class="subscribe_mail_head">subscribe&nbsp;<span class="subscribe_orange">our website</span></p>
            </div>
            <div class="subscribe_email">
                <div class="Enter_email">
                    <i class="far fa-envelope" id="envolope_input"></i>
                    <input type="text" placeholder="Enter your Email">
                </div>
                <button class="subscribe_button" type="button">subscribe <i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
    <div class="four_columns container">
        <div class="first_column col-6 col-lg-3 col-xl-3">
            <img src="<?php echo $address; ?>images/gamerland-logo.png">
            <p class="firs_column_para_1">
                address : abc Haryana, India Postal-Code: 122001
            </p>
            <p class="firs_column_para_2">
                phone number : 1234567890
            </p>
            <p class="firs_column_para_3">
                e-mail : abc123@gmail.com
            </p>
        </div>
        <div class="second_column col-6 col-lg-3 col-xl-3">
            <p class="second_column_head">
                categories
            </p>
            <hr class="second_line">
            <ul class="second_column_list1">
                <li class="second_column_item">PC games</li>
                <li class="second_column_item">playstation games</li>
                <li class="second_column_item">xbox games</li>
                <li class="second_column_item">WI games</li>
                <li class="second_column_item">all games</li>
            </ul>
        </div>
        <div class="third_column col-6 col-lg-3 col-xl-3">
            <p class="third_column_head">
                need help?
            </p>
            <hr class="third_line">
            <ul class="third_column_list1">
                <li class="third_column_item">terms & condition</li>
                <li class="third_column_item">privacy policy</li>
                <li class="third_column_item">contact</li>
                <li class="third_column_item">FAQ</li>
                <li class="third_column_item">upcomming games</li>
            </ul>
        </div>
        <div class="fourth_column col-6 col-lg-3 col-xl-3">
            <p class="fourth_column_head">
                follow us
            </p>
            <hr class="fourth_line">
            <p class="fourth_column_list1">
                <a class="fourth_column_item11" href="###8"><i class="fab fa-facebook-f"></i></a>
                <a class="fourth_column_item12" href="###9"><i class="fab fa-twitter"></i></a>
                <a class="fourth_column_item13" href="####1"><i class="fab fa-linkedin-in"></i></a>
                <a class="fourth_column_item14" href="####1"><i class="fab fa-youtube"></i></a>
            </p>
            <p class="fourth_column_head">
                newsletter sign up
            </p>
            <hr class="fourth_line">
            <p class="newsletter_input">
                <input class="newsletter_text" type="text" placeholder="Enter your email">
                <button class="newletter_button" type="button"><i class="fas fa-rocket"></i></button>
            </p>
        </div>
    </div>
</footer>