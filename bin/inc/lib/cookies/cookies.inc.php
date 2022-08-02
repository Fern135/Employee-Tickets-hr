<?php

class Cookies {
    function __construct($cookie_title, $cookie_data) {
        $this->cookie_title = $cookie_title;
        $this->cookie_data  = $cookie_data;
    }

    function __destruct() {
        $this->cookie_title = "";
        $this->cookie_data  = "";
    }

    function set_cookie(){
        setcookie($this->cookie_title, $this->cookie_data, time() + (86400 * 30), "/"); // 86400 = 1 day
    }

    function get_cookie($cookie_title){
        return $_COOKIE[$cookie_title];
    }
}

// setting local cookie
// function set_cookie($cookie_title, $cookie_data){
//     setcookie($cookie_title, $cookie_data, time() + (86400 * 30), "/"); // 86400 = 1 day
// }


// getting local cookie 
function get_cookie($cookie_title){
    return $_COOKIE[$cookie_title];
}