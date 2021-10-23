<?php

$pass = "123456";

$options = [
    'cost' => 10,

];


// $secure_pass = password_hash($pass, PASSWORD_DEFAULT, $options);
$secure_pass = password_hash($pass, PASSWORD_DEFAULT);
echo $secure_pass."<br>";

$db_pass = '$2y$10$Rc0h8.ua6ktN7HUQ1UaSOuBbW.Zr4FaQXbdDQCyVFCWNkqHiqbcnq';

if(password_verify($pass, $db_pass)):
    echo "Valid password! [ :D ]";
else:
    echo "Invalid password! [ :( ]";
endif;

