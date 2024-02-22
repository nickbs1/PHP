<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio10M</title>
</head>
<body>
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="n1">1 Valor</label>
<input type="number" name="n1" id="n1" placeholder="Digite o 1 valor">

<label for="n2"><br><br><br>2 Valor</label>
<input type="number" name="n2" id="n2" placeholder="Digite o 2 valor">

<label for="p1"><br><br><br>1 peso</label>
<input type="number" name="p1" id="p1" placeholder="Digite o 1 peso">

<label for="p2"><br><br><br>2 peso</label>
<input type="number" name="p2" id="p2" placeholder="Digite o 2 peso">

<input type="submit" value="Enviar">


</form>   

<?php 
$n1=$_POST['n1']??1;
$n2=$_POST['n2']??1;
$p1=$_POST['p1']??1;
$p2=$_POST['p2']??1;
$m1=($n1*$p1+$n2*$p2)/2;
$m2=(($n1*$p1)+($n2*$p2))/($p1+$p2);
echo"A media aritmetrica: " . number_format($m1,2)  .  "<br> A media ponderada: " . number_format($m2,2);
?>
</body>
</html>