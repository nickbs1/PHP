<?php 
$salario=$_GET["salario"];
$atual=1320;
$salq=intdiv($salario,$atual);
$salm=$salario % $atual;
$padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
echo"Salario: " . numfmt_format_currency($padrao,$salario,"BRL") . "<br> voce tem $salq salario minimo <br> mais " . numfmt_format_currency($padrao,$salm,"BRL");

?>
<button onclick="javascript:history.go(-1)">Voltar</button>