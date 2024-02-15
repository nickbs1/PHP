<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
</head>
<body>
<main>
<?php 
date_default_timezone_set("America/Fortaleza");
echo "O dia de hoje é:" .  date("d/m/Y");    

?>
</main>

<main>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="dividendo">Dividendo</label>
    <input type="number" name="dividendo" id="dividendo" min="1" placeholder="digite o dividendo">
    <br>
    <br>
    <br>
    <label for="divisor">Divisor</label>
    <input type="number" name="divisor" id="divisor" min="0" placeholder="digite o numero do divisor">
<input type="submit" value="Calcular">
</form>

</main>

<main>
<?php 
$dividendo=$_POST['dividendo']??0;
$divisor=$_POST['divisor']??1;
$resto=$dividendo % $divisor;
$quociente=intdiv($dividendo,$divisor);

?>
<table class="divisao">
<tr>
<td><?php echo "$dividendo" ?></td>
<td><?php echo "$divisor" ?></td> 
</tr>

<tr>
    <td><?php echo "$resto" ?></td>
    <td><?php echo "$quociente" ?></td>
</tr>

</table>
</main>
<main>
<button onclick="javascript:history.go(-1)">Voltar</button>
<button onclick="javascript:document.location.reload()">Recarregar</button>
</main>
</body>
</html>