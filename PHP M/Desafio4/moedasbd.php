<pre>
<?php 
$inicio=date("m/d/Y",strtotime("-7 days"));
$fim=date("m/d/Y");
$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';$dados=json_decode(file_get_contents($url),true);
var_dump($dados);
$cotaçao=$dados["value"][0]["cotacaoCompra"];
$data=$dados["value"][0]["dataHoraCotacao"];
$reais=$_GET["numero"];
$dolar=$reais/$cotaçao;
$padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
echo"Reais: " . numfmt_format_currency($padrao,$reais,"BRL") . "<br>Dolar: " . numfmt_format_currency($padrao,$dolar,"USD") . "<br> data: $data";

?>
</pre>