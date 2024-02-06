<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <main>
        <?php 
date_default_timezone_set("America/Fortaleza");

echo"o dia de hoje: " . date("d/m/Y") . "<br>O horario:" . date("g:i:s");

//phpinfo();



?>
</main>
    
</body>
</html>
