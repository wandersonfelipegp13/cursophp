<?php

require_once 'db_connect.php';

session_start();

if(isset($_POST['send'])):
    
    $errors = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $password = mysqli_escape_string($connect, $_POST['password']);
    
    if((empty($login)) || (empty($password))):
        $errors[] = "<li> Login and Password must be informed. ";
    else:
        $sql = "SELECT login FROM users where login = '$login'";
        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result) > 0):
            $password = md5($password);
            $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
            $result = mysqli_query($connect, $sql);
            if(mysqli_num_rows($result) == 1):
                $data = mysqli_fetch_array($result);
                $_SESSION['logged'] = true;
                $_SESSION['user_id'] = $data['id'];
                mysqli_close($connect);
                header('Location: home.php');
            else:
                $errors[] = "<li> User and password don't match. </li>";
            endif;
            
        else:
            $errors[] = "<li> User not found. </li>";
        endif;
        
    endif;
    
endif;

?>

<html>

<head>
    <title> Login </title>
    <meta charset="UTF-8">
</head>
<body>
</body>

    <h1> Login </h1>

    <?php

    if(!empty($errors)):
        foreach($errors as $error):
            echo $error;
        endforeach;
    endif;

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="send"> Login </button>
    </form>

</html>
