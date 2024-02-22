<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio1M</title>
</head>
<body>
 <?php 
 $num=$_GET['numero'] ?? 0;
 $ant=$num-1;
 $suc=$num+1;
 echo"Numero: $num <br> Antecessor: $ant <br> Sucessor: $suc";
 ?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
<label for="numero">Numero</label>
<input type="number" name="numero" id="numero" placeholder="digite o numero">
<input type="submit" value="Enviar">
</form>   
</body>
</html>