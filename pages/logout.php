<?php
session_start();
if(isset($_SESSION['success']) && isset($_SESSION['error1']) && isset($_SESSION['error2']))
{
    unset($_SESSION['success']);
    unset($_SESSION['error1']);
    unset($_SESSION['error2']);
}

if(isset($_SESSION['g-name']) && isset($_SESSION['g-sell-price']) && isset($_SESSION['g-buy-price']) && isset($_SESSION['g-src']) && isset($_SESSION['drop-name']) && isset($_SESSION['source']) && isset($_SESSION['sell']))
{
    unset($_SESSION['g-name']);
    unset($_SESSION['g-sell-price']);
    unset($_SESSION['g-buy-price']);
    unset($_SESSION['g-src']);
    unset($_SESSION['drop-name']);
    unset($_SESSION['source']);
    unset($_SESSION['sell']);
}

if(isset($_SESSION['user-profile-stored-photo']) && isset($_SESSION['user-profile-image']))
{
    unset($_SESSION['user-profile-stored-photo']);
    unset($_SESSION['user-profile-image']);
}

if(isset($_SESSION['name']) && isset($_SESSION['lastname']) && isset($_SESSION['country']) && isset($_SESSION['language']) && isset($_SESSION['p-image']) && 
isset($_SESSION['mobile']) && isset($_SESSION['add-1']) && isset($_SESSION['add-2']) && isset($_SESSION['postal']) && isset($_SESSION['city']))
{
    unset($_SESSION['name']);
    unset($_SESSION['lastname']);
    unset($_SESSION['country']);
    unset($_SESSION['language']);
    unset($_SESSION['p-image']);
    unset($_SESSION['mobile']);
    unset($_SESSION['add-1']);
    unset($_SESSION['add-2']);
    unset($_SESSION['postal']);
    unset($_SESSION['city']);
}

if (isset($_SESSION['username']) && isset($_SESSION['mail'])) {
    unset($_SESSION['username']);
    unset($_SESSION['mail']);
    header('Location: project');
}

unset($_SESSION['count_p']);