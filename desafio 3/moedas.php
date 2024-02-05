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
$cotaçao=4.95;
$real=$_GET["din"];
$dolar=$real/$cotaçao;
$padrão=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
echo"seus " . numfmt_format_currency($padrão,$real,"BRL") 
. "<br>equivale " . numfmt_format_currency($padrão,$dolar,"USD");

?>
<BUtton onclick="javascript:history.go(-1)">voltar</BUtton>

</main>  
    
</body>
</html>