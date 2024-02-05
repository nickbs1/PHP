<pre>
<?php 
$inicio = date("m-d-Y",strtotime("-7 days"));
$fim = date("m-d-Y");
$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';



$dados=json_decode(file_get_contents($url),true);

//var_dump($dados);

$cotação=$dados["value"][0]["cotacaoCompra"];
$dia=$dados["value"][0] ["dataHoraCotacao"];



echo"cotação do dolar hoje $cotação <br> dia $dia";

?>
<!--
video desafio 4 de php curso em video do gustavo guanabara.
-->
</pre>