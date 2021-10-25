<?php

class Login {
    
    public static $user;

    public static function loginCheck() {
        echo "The user ".self::$user." is logged in!";
    }

}

Login::$user = "admin";
Login::loginCheck();
