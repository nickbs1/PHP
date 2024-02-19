<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salario</title>
</head>
<body>
      <main>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="salario"  min="1" placeholder="Digite seu salário">
            <input type="submit" value="Calcular">
        </form>
    </main>    
    
    
    <main>
    <?php 
    $atual=1320;
    $salario=$_POST["salario"] ?? 0;
    $qsalario=intdiv($salario,$atual);
    $amais=$salario % $atual;
    echo "seu salario é $salario <br> Atualmente o salario minimo é $atual <br> voce tem $qsalario salarios minimos <br> mais $amais.";
    ?>
    </main>   

</body>
</html>