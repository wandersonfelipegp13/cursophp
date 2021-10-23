<?php

session_start();

$_SESSION['part'] = "Golden Wind";
$_SESSION['stand'] = "Gold Experience";

echo $_SESSION['part']."<br>".$_SESSION['stand']."<br>".session_id();

?>
