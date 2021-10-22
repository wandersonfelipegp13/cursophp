<?php

setcookie('user',   'Wande',            time()+20);
setcookie('email',  'example@mail.com', time()+60);

// remove
// setcookie('email',  'example@mail.com', time()-60);

echo $_COOKIE['user'];
echo "<br>";
var_dump($_COOKIE);

