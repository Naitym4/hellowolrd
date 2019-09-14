<?php

namespace Borges;

final class HelloWorld {
    
    private static $_messages = [
        "en" => "Hello World",
        "pt" => "Olá mundo"
    ];
    
    public static function getMessage($lang){
        return isset(self::$_messages[$lang]) ? self::$_messages[$lang] : false;
    }
    
    public static function addMessage($lang,$message){
        self::$_messages[$lang] = $message;
    }
}