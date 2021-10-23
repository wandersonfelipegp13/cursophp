<html>
    <body>

        <?php
        
        if(isset($_POST['send'])):
            
            $formats = array("png", "jpeg", "jpg", "gif");
            
            $number_of_files = count($_FILES['file']['name']);
            $counter = 0;
            
            while($counter < $number_of_files):
                             
                $extension = pathinfo($_FILES['file']['name'][$counter], PATHINFO_EXTENSION);

                if(in_array($extension, $formats)):
                    $dir = "files/";
                    $tmp = $_FILES['file']['tmp_name'][$counter];
                    $new_name = uniqid().".$extension";

                    if(move_uploaded_file($tmp, $dir.$new_name)):
                        echo "Successfully uploaded! $dir$new_name<br>";
                    else:
                        echo "Unable to upload! $tmp";
                    endif;
                else:
                    echo "$extension is a invalid format!<br>";
                endif;
                
                $counter++;

            endwhile;
        endif;

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="file[]" multiple><br>
            <input type="submit" name="send"><br>
        </form>
    </body>
</html>

