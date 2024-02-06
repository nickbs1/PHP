<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moedas</title>
</head>
<body>
<main>  
<?php 
date_default_timezone_set("America/Fortaleza");
echo"data de hoje:" . date("d/m/Y") . "<br>horario" . date("g:i:s") . "<br>";
/* 

*/
$inicio = date("m-d-Y",strtotime("-7 days"));
$fim = date("m-d-Y");
$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';



$dados=json_decode(file_get_contents($url),true);

$cotação=$dados["value"][0]["cotacaoCompra"];
$dia=$dados["value"][0] ["dataHoraCotacao"];
/*
essas informaçoes ja foram explicadas em moedas_banco_central.php
*/



$real=$_GET["din"];
$dolar=$real / $cotação;

$padrão=numfmt_create("pt_BR",NumberFormatter::CURRENCY);

echo"seus " . numfmt_format_currency($padrão,$real,"BRL") 
. "<br>equivale " . numfmt_format_currency($padrão,$dolar,"USD");
/*
explicado no desafio 3
*/
?>
<BUtton onclick="javascript:history.go(-1)">voltar</BUtton>
<!--
volta uma pagina.mais se fosse -2 voltaria duas se fosse -3 voltaria 3. 
-->

</main>  
    
</body>
</html>