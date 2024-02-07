<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 </title>
</head>
<body>
<main>
<?php

$numero=$_POST['numero'];
$antecessor=$numero-1;
$sucessor=$numero+1;

?>

<h1>antecessor e sucessor dentro do mesmo arquivo</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<label for="numero">Numero</label>
<input type="number" name="numero" id="numero" placeholder="digite o numero">
<input type="submit" value="Gerar">
</form>
<?php 
echo "O numero que foi digitado: $numero <br> O antecessor: $antecessor <br> O sucessor: $sucessor";

?>

</main>


</body>
</html>