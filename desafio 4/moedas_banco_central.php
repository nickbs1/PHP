<pre>
<?php 
$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'01-29-2024\'&@dataFinalCotacao=\'02-02-2024\'&$top=1&$orderby=DataHoraCota%C3%A7%C3%A3o%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';



$dados=json_decode(file_get_contents($url),true);

var_dump($dados);


?>
</pre>