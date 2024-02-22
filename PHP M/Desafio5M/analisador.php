<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio5M</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="numero">Numero</label>
<input type="number" name="numero" id="numero" step="0.001" placeholder="digite o numero">
<input type="submit" value="Analisar"> 
</form>   

<?php 
$num=$_POST['numero'] ?? 0;
$inteiro=(int) $num;
$decimal=$num-$inteiro;
echo"Numero: $num <br> parte inteira: $inteiro <br> parte decimal: $decimal";
?>
</body>
</html>