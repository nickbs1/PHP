<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio17</title>
</head>
<body>
 <main>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="segundos">Quantos segundos</label>
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

echo"$seg segundos tem <br> Semanas: $semanas <br> Dias: $dias <br> Horas: $horas <br> Minutos: $minutos <br> Segundos: $a4";
?>

</main>   
</body>
</html>