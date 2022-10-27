<?php 

class Util {
    function __construct() {
        $this->permitted_chars = '!@#$%^&*()_+=-0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    function __destruct() {
        
    }

    // a simple way instead of echo
    public function print($data){
        echo $data;
    }

    // generating random alphanumeric string with $size in length
    public function genApiKey($size){
        $input_length = strlen($this->permitted_chars);
        $random_string = '';
        for($i = 0; $i < $size; $i++) {
            $random_character = $this->permitted_chars[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
     
        return $random_string;
    }

    // generating random bytes
    public function genRandBytes($size){
        return bin2hex(random_bytes($size));
    }

    // checking if $num is int or not
    public function isInt($num){
        return is_int($num);
    }
    
    // checking if $data is string or not
    public function isString($data){
        return is_string($data);
    }

    // checking if the email is correct format or not
    public function eMailConfirm($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;

        }else{
            return false;
        }
    }
}