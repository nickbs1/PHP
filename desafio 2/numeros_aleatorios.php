<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros aleatorios</title>
</head>
<body>
  <main>
<?php 
date_default_timezone_set("America/Fortaleza");
echo"data de hoje:" . date("d/m/Y") . "<br> horario:" . date("g:i:s");

$min=0;
/* 
$min=0: declarei uma variavel chamada $min com o valor 0.
*/
$max=105;
/*
$max= declarei uma variavel chamada $max com o valor 105
*/
$num=mt_rand($min,$max);
/*
1-mt_rand(): mt_rand é uma função em PHP que gera um número inteiro aleatório. 
2-$min e $max: São as variáveis que representam os limites inferior e superior do intervalo no qual você deseja gerar o número aleatório.Neste caso vai gerar valores entre 0 até 105.
3-$num: Esta variável armazenará o número inteiro aleatório gerado pela função mt_rand dentro do intervalo definido pelos valores de $min e $max.
*/
echo"<br><h1>Gerador de numero entre 0 e 105.</h1>";
echo"<br> $num";
/*
1-vai imprimir na tela Gerador de numero entre 0 e 105.
2-<h1> e </h1>=é uma tag em html que coloca a frase em cabeçalho de nível 1.
<br>= quebra de linha em html.
*/

?>
<button onclick="javascript:document.location.reload()">Gerar</button>
<!--
essa linha de codigo foi explicada no desafio 1.
em resumo ela recarrega a pagina.
-->
  </main>  
</body>
</html>