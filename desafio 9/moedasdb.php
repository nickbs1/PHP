<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moedas</title>
</head>
<body>



<main>
<form action="<?php echo $_SERVER['PHP_SELF'];?> " method="post">
<label for="dinheiro">Valor</label>
<input type="number" name="dinheiro" id="dinheiro" step="0.001" placeholder="Digite o valor">
<input type="submit" value="Calcular">
</form>    

</main>
</body>
</html>