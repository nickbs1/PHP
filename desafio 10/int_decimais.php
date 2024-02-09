<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intdecimais</title>
</head>
<body>
 <main>
    <?php 
    $num=$_POST["numero"] ?? 0;
    $inteiro=(int) $num;
    $decimal=$num-$inteiro;
    echo"O numero digitado: $num <br> Parte inteira:$inteiro <br> Parte fracionada:$decimal."
    ?>
</main>

<main>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<label for="numero">Numero</label>
<input type="number" name="numero" id="numero" step="0.01" placeholder="Digite o numero">
<input type="submit" value="Calcular">
</form>
</main>

</body>
</html>