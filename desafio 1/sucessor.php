<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor</title>
</head>
<body>
<main>

<?php 
$num=$_GET["numero"];
/*
1-O trecho $num = $_GET["numero"]; é uma linha de código em PHP que está sendo usada para obter dados de uma solicitação HTTP usando o método GET. 
2-$_GET: É uma superglobal no PHP que é usada para coletar dados enviados para o script PHP através do método GET. O método GET é comumente usado para enviar dados de formulários ou parâmetros na URL.
3-["numero"]: Dentro do array associativo $_GET, está sendo especificado o índice "numero". 
4-$num: Este é uma variável PHP que está sendo atribuída com o valor do campo "numero" enviado através do método GET.
*/
$antecessor=$num-1;
/*
$antecessor = $num - 1: Esta linha calcula o antecessor (número anterior) do valor contido na variável $num. Subtrai 1 do valor do $num e armazena o resultado na variável $antecessor.
*/
$sucessor=$num+1;
/* 
$sucessor = $num + 1: Esta linha calcula o sucessor (número seguinte) do valor contido na variável $num. Adiciona 1 ao valor do $num e armazena o resultado na variável $sucessor.
*/

echo"O numero digitado: $num <br> O antecessor deste numero: $antecessor <br> 
O sucessor deste numero: $sucessor ";
/*
echo para imprimir uma mensagem na tela, exibindo o número digitado, seu antecessor e sucessor.<br> é usado para adicionar quebras de linha HTML.

*/
?>
<button onclick="javascript:history.go(-1)">voltar</button>
<!--
1-<button>: Este é um elemento HTML que cria um botão na página.
2-javascript:Esta parte é um identificador de esquema que indica que o código JavaScript seguirá.
3-history.go() é usado para navegar para trás ou para frente na sessão de histórico do navegador. No caso de history.go(-1), ele volta uma página no histórico do navegador.Se fosse -2 voltava duas paginas se fosse -3 voltava 3 paginas e assim por diante.
4-voltar: Este é o texto que será exibido no botão. Neste caso, o botão será rotulado como "voltar".    
-->


</main>
    
</body>
</html>