<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "login_system";

$connect = mysqli_connect($server_name, $user_name, $password, $db_name);

if(mysqli_connect_error()):
    echo "Connection failure: ".mysqli_connect_error();
endif;
