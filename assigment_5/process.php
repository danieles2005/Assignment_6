<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];
$e = $_GET['e'];


$command = escapeshellcmd("python3 /var/www/html/data_management.py a=$a b=$b c=$c d=$d e=$e");
$output = shell_exec($command);


echo "<h2>Resultados:</h2>";
echo $output;
?>
