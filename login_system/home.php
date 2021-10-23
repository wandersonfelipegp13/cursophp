<?php

require_once 'db_connect.php';

session_start();

if(!isset($_SESSION['logged'])):
    header('Location: index.php');
endif;

$id     =   $_SESSION['user_id'];
$sql    =   "SELECT * FROM users WHERE id = '$id'";
$result =   mysqli_query($connect, $sql);
$data   =   mysqli_fetch_array($result);
mysqli_close($connect);

?>

<html>

<head>
    <title> Home </title>
    <meta charset="UTF-8">
</head>

<body>

    <h2> Welcome <?php echo $data['name']; ?> </h2>
    <a href="logout.php"> logout </a>
</body>

</html>
