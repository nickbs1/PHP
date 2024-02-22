<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desaio4M</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="numero">Reais</label>
<input type="number" name="numero" id="numero" step="0.01" placeholder="Digite quanto quer converter">
<input type="submit" value="Enviar">
</form>   
<pre> 
<?php 
$inicio=date("m/d/Y",strtotime("-7 days"));
$fim=date("m/d/Y");
$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
$dados=json_decode(file_get_contents($url),true);
var_dump($dados);
$cotaçao=$dados["value"][0]["cotacaoCompra"];
$data=$dados["value"][0]["dataHoraCotacao"];
$reais=$_POST['numero'] ?? 0;
$dolar=$reais/$cotaçao;
$padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY); 
echo"Reais: " . numfmt_format_currency($padrao,$reais,"BRL") . "<br> Dolar: " . numfmt_format_currency($padrao,$dolar,"USD") . "<br> Data: $data";
?>
</pre>
</body>
</html>