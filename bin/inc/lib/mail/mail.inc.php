<?php 

class Mail {
    // private $to;
    // private $subject;
    // private $data;
    // private $header;

    function __construct($to, $subject, $data, $header) {
        $this->to      = $to;
        $this->subject = $subject;
        $this->data    = $data;
        $this->header  = $header;
    }

    function __destruct() {
        $this->to      = "";
        $this->subject = "";
        $this->data    = "";
        $this->header  = "";
    }

    public function sendMail(){
        mail($this->to, $this->subject, $this->data, $this->header);
    }
}