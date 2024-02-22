<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio6M</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
  <label for="nome">Nome</label>
  <input type="text" name="nome" id="nome" placeholder="digite o nome">
  <label for="sobrenome">Sobrenome</label>
  <input type="text" name="sobrenome" id="sobrenome" placeholder="digite o sobrenome">
  <input type="submit" value="Enviar">
</form>  

<?php 
$nome=$_GET['nome'] ?? " ";
$sobrenome=$_GET['sobrenome'] ?? " " ;
echo"prazer te conhecer $nome $sobrenome";
?>
</body>
</html>