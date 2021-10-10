<?php

$name = $_POST['name'];
$mail = $_POST['email'];

echo "Welcome $name. <br><b>$mail<b><br>";
echo var_dump($_POST).'<br>';
