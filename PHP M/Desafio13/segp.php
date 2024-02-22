<?php 
$seg=$_GET['segundos'];

$semanas=intdiv($seg,604800);
//numero de semanas
$a1=$seg % 604800;


$dias=intdiv($a1,86400);
//numero de dias
$a2=$a1 % 86400;


$horas=intdiv($a2,3600);
$a3=$a2 % 3600;

$minutos=intdiv($a3,60);
$a4=$a3 % 60;

echo"semanas: $semanas <br>dias: $dias <br>horas: $horas <br>minutos: $minutos <br>segundos: $a4 <br> $seg segundos tem exatamente este tempo."; 
?>