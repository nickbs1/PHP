<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio13M</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="segundos">quantos segundos</label>
<input type="number" name="segundos" id="segundos" placeholder="Digite quantos segundos">
<input type="submit" value="Enviar">
</form>  
<?php 
$seg=$_POST['segundos']??0;

$semanas=intdiv($seg,604800);
$a1=$seg % 604800;

$dias=intdiv($a1,86400);
$a2=$a1 % 86400;

$horas=intdiv($a2,3600);
$a3=$a2 % 3600;

$minutos=intdiv($a3,60);
$a4=$a3 % 60;

echo"Semanas: $semanas <br> Dias: $dias <br> Horas: $horas <br> Minutos: $minutos <br> Segundos: $a4 <br> $seg segundos e exatamente esse tempo.";

?>

</body>
</html>