<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio11M</title>
</head>
<body>
    <?php 
      $atual=date("Y");
    $ano=$_POST['ano']??$atual;
    $idade=$atual-$ano;
    echo"Sua idade ate o final do ano sera de : $idade";
    ?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="ano">Ano que nasceu</label>
<input type="number" name="ano" id="ano" max="<?php  echo"$atual"?>" placeholder="Digite o ano que nasceu">
<br><br><br>
<label for="atual">Ano Atual</label>
<input type="number" name="atual" id="atual" min="<?php echo"$atual"?>" placeholder="Ano atualmente" value="<?php echo "$atual"?>">
<input type="submit" value="Enviar">
</form>   
</body>
</html>