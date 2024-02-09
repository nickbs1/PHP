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
 <?php 
 $cotaçao=4.95;
 $real=$_POST["din"] ?? 0;
 $dolar=$real/$cotaçao;
 $padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
 echo"Dinheiro: " . numfmt_format_currency($padrao,$real,"BRL") . "Dolar: " . numfmt_format_currency($padrao,$dolar,"USD");
 ?>   
</main>


<main>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<label for="din">Valor</label>
<input type="number" name="din" id="din" step="0.001" placeholder="Digite o valor">
<input type="submit" value="Calcular">
</form>
</main>  
</body>
</html>