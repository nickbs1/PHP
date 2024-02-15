<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <main>
        <?php 
    $nome = $_GET['nome'] ?? " ";
    $sobrenome = $_GET ['sobrenome'] ?? " ";
    echo"seu nome completo é $nome $sobrenome.";
    ?>
    </main>

    <main>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" placeholder="digite um nome">
<input type="text" name="sobrenome" id="sobrenome" placeholder="digite o sobrenome">
<input type="submit" value="Enviar">
</form>
    </main>
</body>
</html>