<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero</title>
</head>
<body>
  <main>
<?php 
date_default_timezone_set("America/Fortaleza");
echo"data de hoje:" . date("d/m/Y") . "<br> horario: " . date("g:i:s") . "<br>";
$num=$_POST["numero"];
$inteira=(int) $num;
$fracionada=$num-$inteira;
echo"O numero digitado foi $num <br> A parte inteira é:$inteira <br> A parte fracionada é: $fracionada";


?>
<button onclick="javascript:history.go(-1)">Voltar</button>


  </main>  
    
</body>
</html>