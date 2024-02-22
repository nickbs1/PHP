<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio8M</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="salario">salario</label>
<input type="number" name="salario" id="salario" placeholder="digite o salario">
<input type="submit" value="Enviar">
</form>  

<?php 
$salario=$_POST['salario'] ?? 0;
$atual=1320;
$salq=intdiv($salario,$atual);
$salm=$salario % $atual;
$padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);
echo"Salario: " . numfmt_format_currency($padrao,$salario,"BRL") . "<br> voce tem $salq salarios minimos <br> mais " . numfmt_format_currency($padrao,$salm,"BRL");
?>
</body>


</html>