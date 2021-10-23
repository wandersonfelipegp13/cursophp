<?php

$file = 'file.txt';

$content = "Test content\r\n:D";

$opened_file = fopen('file.txt', 'r');

// fwrite($opened_file, $content);

$file_size = filesize($file);

while(!feof($opened_file)):
    $line = fgets($opened_file, $file_size);
    echo $line."<br>";
endwhile;

fclose($opened_file);


