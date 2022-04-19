<?php
$dbhost = 'localhost';
$dbuser ='mateusz@localhost';
$dbpass ='Zaq129885';
$baza='PZ2022Nettom';
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$baza);
if (!$link) echo '<b> przerwano polaczenie</b>';
?>