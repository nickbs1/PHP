<?php 
$valor=$_GET["saque"];

$tot100=intdiv($valor,100);
$resto=$valor % 100;

$tot50=intdiv($resto,50);
$resto=$resto % 50;

$tot20=intdiv($resto,20);
$resto=$resto % 20;

$tot10=intdiv($resto,10);
$resto=$resto % 10;

$tot5=intdiv($resto,5);
$resto=$resto % 5;

$tot2=intdiv($resto,2);
$resto=$resto % 2;

echo"notas de 100: $tot100 <br> notas de 50: $tot50 <br> notas de 20: $tot20 <br> notas de 10: $tot10 <br> notas de 5: $tot5 <br> notas de 2: $tot2 <br> pra sacar falta: $resto";


?>