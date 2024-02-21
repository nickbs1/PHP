<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio15</title>
</head>
<body>

<main>
    
    <?php
    $atual=date("Y"); 
   $ano=$_POST['ano']?? $atual;
   $idade=$atual-$ano;

    ?>
   
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
   <label for="ano">Ano que nasceu</label>
   <input type="number" name="ano" id="ano" max="<?php echo "$atual"?>" placeholder="digite o ano que nasceu">
   <br><br><br>
   <label for="atual">Ano atual</label>
   <input type="number" name="atual" id="atual" min="<?php echo"$atual"?>" placeholder="Ano Atual" value="<?php echo"$atual"?>">
   <input type="submit" value="Enviar">
</form> 

<?php 
echo"Sua idade ate o final do ano sera de: $idade";
?>

</main>
</body>
</html>