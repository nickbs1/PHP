<?php 
$cotaçao=4.95;
$reais=$_POST["numero"];
$dolar=$reais/$cotaçao;
$padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
echo"Reais:" . numfmt_format_currency($padrao,$reais,"BRL") . "<br> Dolar: " . numfmt_format_currency($padrao,$dolar,"USD");
?>