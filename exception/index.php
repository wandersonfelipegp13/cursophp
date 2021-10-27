<?php

class Newsletter {
    public function registerEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Invalid email", 1);
        else:
            echo "Everything ok!";
        endif;
    }
}

try {
    $obj = new Newsletter();
    $obj->registerEmail("contact@");
} catch(Exception $e) {
    echo $e->getMessage()." | code: ".$e->getCode()." in line ".$e->getLine(); 
} 
