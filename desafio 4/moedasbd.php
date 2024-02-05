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

$inicio = date("m-d-Y",strtotime("-7 days"));
$fim = date("m-d-Y");
$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';



$dados=json_decode(file_get_contents($url),true);

$cotação=$dados["value"][0]["cotacaoCompra"];
$dia=$dados["value"][0] ["dataHoraCotacao"];

echo"cotação do dolar hoje $cotação <br> dia $dia";





$real=$_REQUEST["din"];
$dolar=$real / $cotação;
$padrão=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
echo"seus " . numfmt_format_currency($padrão,$real,"BRL") 
. "<br>equivale " . numfmt_format_currency($padrão,$dolar,"USD");

?>
<BUtton onclick="javascript:history.go(-1)">voltar</BUtton>

</main>  
    
</body>
</html>