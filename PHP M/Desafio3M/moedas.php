<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio3M</title>
</head>
<body>
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
 <label for="numero">Reais</label>
 <input type="number" name="numero" id="numero" step="0.01" placeholder="digite quantos reais quer converter">
 <input type="submit" value="Converter">
</form>   

<?php 
$cotaçao=4.95;
$reais=$_POST['numero'] ?? 0;
$dolar=$reais/$cotaçao;
$padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
echo"Reais: " . numfmt_format_currency($padrao,$reais,"BRL") . "Dolar: " . numfmt_format_currency($padrao,$dolar,"USD");
?>
</body>
</html>