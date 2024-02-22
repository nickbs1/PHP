<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio9M</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="raizq">Raizes</label>
<input type="number" name="raizq" id="raizq" placeholder="digite o valor">
<input type="submit" value="Enviar">
</form> 

<?php 
$num=$_POST['raizq'] ?? 0;
$raizq=$num ** (1/2);
$raizc=$num ** (1/3);
echo "Raiz quadrada: $raizq <br> Raiz cubica: $raizc";
?>
</body>
</html>