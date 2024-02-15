<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cotação</title>
</head>
<body>
    <main>
        <pre>
            <?php 
    $inicio=date("d/m/Y",strtotime("-7 days"));
    $fim=date("d/m/Y");
    $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-08-2024\'&@dataFinalCotacao=\'02-15-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados=json_decode(file_get_contents($url),true);
    //var_dump($dados);
    $cotaçao=$dados["value"][0]["cotacaoCompra"];
    $dia=$dados["value"][0]["dataHoraCotacao"];
    $data=date_default_timezone_set("America/Fortaleza");
    echo"cotação de hoje: $cotaçao <br>            dia:" . date("d/m/Y") . "<br>            Horario:" . date("g:i:s") ;

        ?>

    
    </pre>
</main>



<main>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<label for="din">Valor</label>
<input type="number" name="din" id="din" step="0.001" placeholder="Digite o valor">
<input type="submit" value="Calcular">
</form>
</main>

<main>
<?php 
$padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
$real=$_POST["din"] ?? 0;
$dolar=$real/$cotaçao;
echo"dinheiro:" . numfmt_format_currency($padrao,$real,"BRL") . "<br>Dolar: " . numfmt_format_currency($padrao,$dolar,"USD"); 


?>
</main>

</body>
</html>
