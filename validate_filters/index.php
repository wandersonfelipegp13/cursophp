<!DOCTYPE html>
<html>
    <head>
        <title> Validate Filters </title>
        <meta charset="UTF-8">
    </head>
    <body>

        <?php

        if(isset($_POST['submit'])):
            $errors = array();
            
            if(!$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT)):
                $errors[] = "Age must be a integer.";
            endif;

            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                 $errors[] = "Invalid email.";
            endif;

            if(!$weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT)):
                $errors[] = "Weight must be a float.";
            endif; 

            if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                 $errors[] = "Invalid IP.";
            endif;

            if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                 $errors[] = "Invalid URL.";
            endif;

            if(!empty($errors)):
                foreach($errors as $error):
                    echo "<li> $error </li>";
                endforeach;
            else:
                echo 'Correct data!';
            endif;

        endif;

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Age: <input type="number" name="age"><br>
            Email: <input type="email" name="email"><br>
            Weight: <input type="text" name="weight"><br>
            IP: <input type="text" name="ip"><br>
            URL: <input type="text" name="url"><br>
            <button type="submit" name="submit"> Send </button>
        </form>
    </body>
</html>
