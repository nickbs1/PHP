<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros aleatorios</title>
</head>
<body>
  <main>
<?php 
$min=0;
$max=105;
$num=mt_rand($min,$max);
echo"<h1>Gerador de numero entre 0 e 105.</h1>";
echo"<br> $num"
?>
<button onclick="javascript:document.location.reload()">Gerar</button>
  </main>  
</body>
</html>