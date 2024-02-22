<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio7M</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="dividendo">Dividendo</label>
    <input type="number" name="dividendo" id="dividendo" placeholder="Digite o dividendo">
    <label for="divisor">Divisor</label>
    <input type="number" name="divisor" id="divisor" placeholder="digite o divisor">
    <input type="submit" value="Enviar">
</form> 

<?php 
$divisor=$_POST['divisor'] ?? 1;
$dividendo=$_POST['dividendo']?? 0;
$resto=$dividendo % $divisor;
$divisao=$dividendo/$divisor;
$quociente=intdiv($dividendo,$divisor);
echo"O resto da divisão: $resto <br> quociente: $quociente <br> divisão: $divisao";
?>
</body>
</html>