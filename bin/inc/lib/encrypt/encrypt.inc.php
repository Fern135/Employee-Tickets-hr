<?php 

class ENC {
    private $ciphering     = "AES-256-CTR";
    // private $iv_length     = openssl_cipher_iv_length($ciphering); // not sure why this is needed
    private $options       = 0;
    private $encryption_iv = '1234567891011121';

    // DONOT USE THIS KEY. It has 0 security
    private $KEY = "ProgrammingIsAwesome123456789!@#$%^&*()_+=-0";

    // function __construct() {
        
    // }

    // function __destruct() {
        
    // }

    function Encrypt($data){
        return openssl_encrypt(
            $data, 
            $this->ciphering,
            $this->KEY, 
            $this->options, 
            $this->encryption_iv
        );
    }
    
    function Decrypt($data){
        openssl_decrypt(
            $data, 
            $this->ciphering, 
            $this->KEY, 
            $this->options, 
            $this->decryption_iv
        );
    }

}