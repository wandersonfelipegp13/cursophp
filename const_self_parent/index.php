<?php 

class Persona {
    const name = "Giorno";
    
    public function showName() {
        echo self::name;
    }
}

class Giorno extends Persona {
    const name = "Giovanna";
    
    public function showName() {
        echo parent::name."<br>"; 
        echo self::name."<br>";
    }
}

$giorno = new Giorno();
$giorno->showName();

