<?php
$value = 'faza';
$value2 = 'Faza Bilwildi Emyu';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /* Kadluarsa dalam 1 jam, satuan detik*/

echo "<h1>Ini halman pengesetan cookie</h1>";

echo "<h2>Klik <a href='cookie02.php'>disini</a> untuk memeriksa cookie</h2>";
?>