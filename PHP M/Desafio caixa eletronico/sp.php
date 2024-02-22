<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio18</title>
</head>
<body>
  <main> 
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="saque">Valor</label>
<input type="number" name="saque" id="saque" placeholder="Digite o valor">
<input type="submit" value="Enviar">
</form>

<?php 
$valor=$_POST['saque']??0;

$tot100=intdiv($valor,100);
$resto=$valor % 100;

$tot50=intdiv($resto,50);
$resto=$resto % 50;

$tot20=intdiv($resto,20);
$resto=$resto % 20;

$tot10=intdiv($resto,10);
$resto=$resto % 10;

$tot5=intdiv($resto,5);
$resto=$resto % 5;

$tot2=intdiv($resto,2);
$resto=$resto % 2;

$padrao=numfmt_create("pt_BR",NumberFormatter::CURRENCY);

echo"Valor: " . numfmt_format_currency($padrao,$valor,"BRL") . "<br> Notas de 100: $tot100 <br> Notas de 50: $tot50 <br> Notas de 20: $tot20 <br> Notas de 10: $tot10 <br> Notas de 5: $tot5 <br> Notas de 2: $tot2 <br> Restou $resto para sacar."; 
?>
</main>
</body>
</html>