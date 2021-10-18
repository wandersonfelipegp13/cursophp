<html>
    <body>

        <?php
        
        if(isset($_POST['send'])):
            $formats = array("png", "jpeg", "jpg", "gif");
            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if(in_array($extension, $formats)):
                $dir = "files/";
                $tmp = $_FILES['file']['tmp_name'];
                $new_name = uniqid().".$extension";

                if(move_uploaded_file($tmp, $dir.$new_name)):
                    $message = "Successfully uploaded!";
                    
                    /*
                    try {
                        unlink($dir.$new_name);
                    } catch (Exception $e) {
                        $message = "Can't delete!";
                    }
                    */
                
                else:
                    $message = "Unable to upload!";
                endif;
            else:
                $message = "Invalid format!";
            endif;

            echo $message;

        endif;

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="file"><br>
            <input type="submit" name="send"><br>
        </form>
    </body>
</html>

