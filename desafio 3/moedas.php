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
echo"data de hoje:" . date("d/m/Y") . "<br>horario: " . date("g:i:s") . "<br>";
$cotaçao=4.95;
/*
criei uma variavel que a guardara o numero 4.95
*/
$real=$_GET["din"];
/*
essa variavel recebera os dados de conversor.html
*/
$dolar=$real/$cotaçao;
/*
essa variavel vai converter o real para  dolar.
*/
$padrão=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
/*
1-numfmt_create: É uma função em PHP que cria uma nova instância da classe NumberFormatter. Esta classe é usada para formatação de números e suporta várias opções de formatação.
2-"pt_BR": É o primeiro argumento passado para numfmt_create e representa o código de idioma e país para o qual a formatação de números será configurada. Neste caso, é para o português do Brasil.
3-NumberFormatter::CURRENCY: É o segundo argumento passado para numfmt_create e especifica o estilo de formatação desejado. NumberFormatter::CURRENCY indica que a formatação deve ser realizada como moeda.
4-a linha de código em questão está criando um objeto NumberFormatter chamado $padrao que está configurado para formatar números como moeda no formato específico da língua portuguesa do Brasil.

*/
echo"seus " . numfmt_format_currency($padrão,$real,"BRL") 
. "<br>equivale " . numfmt_format_currency($padrão,$dolar,"USD");
/*
1-numfmt_format_currency($padrao, $real, "BRL"): Esta parte utiliza o método numfmt_format_currency da classe NumberFormatter. O primeiro argumento é a instância da formatação ($padrao), o segundo é o valor a ser formatado ($real), e o terceiro é o código da moeda (BRL para reais).
2-<br>=quebra de linha.
3-(.)=concatenação.
4-numfmt_format_currency($padrão,$dolar,"USD")=mesma coisa da primeira com a diferença que agora a moeda é americana.

*/

?>
<BUtton onclick="javascript:history.go(-1)">voltar</BUtton>
<!--
cria um botão que tem a função de voltar uma pagina se fosse -2 voltava duas paginas.
-->

</main>  
    
</body>
</html>