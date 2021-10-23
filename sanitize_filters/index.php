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

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
            echo $name.'<br>';
            
            $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($age, FILTER_VALIDATE_INT)):
                $errors[] = "Age must be a integer.";
            endif;   

            $mail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($mail, FILTER_VALIDATE_EMAIL)):
                $errors[] = "Invalid email.";
            endif;
            
            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)):
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
            Name: <input type="text" name="name"><br>
            Age: <input type="text" name="age"><br>
            Email: <input type="text" name="email"><br>
            URL: <input type="text" name="url"><br>
            <button type="submit" name="submit"> Send </button>
        </form>
    </body>
</html>
