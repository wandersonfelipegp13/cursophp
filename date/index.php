<?php

date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y - l - H:i:s A');
echo "<br>";
echo date('d/m/Y', time());
echo "<br>";
$payment_day = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/ - h:i', $payment_day);
echo "<br>";

$date = '2021-10-20 13:30:34';
$date = strtotime($date);
echo date('d/m/Y h:i:s', $date);
