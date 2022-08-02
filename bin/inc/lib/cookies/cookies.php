<?php

// setting local cookie
function set_cookie($cookie_title, $cookie_data){
    if(!isset($_COOKIE[$cookie_title])){
        setcookie($cookie_title, $cookie_data, time() + (86400 * 30), "/"); // 86400 = 1 day

    }

    return true;
}


// getting local cookie 
function get_cookie($cookie_title){
    return $_COOKIE[$cookie_title];
}