<?php

class HelloWorld {
    
    public $lang = "pt";

    private $_messages = [
        "en" => "Hellow World",
        "pt" => "Olá mundo"
    ];

    public function __constructor($lang = "pt"){
        $this->lang = $lang;
    }
    
    public function getMessage(){
        return isset($this->_messages[$this->lang]) ? $this->_messages[$this->lang] : false;
    } 
}