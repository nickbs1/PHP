<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio13</title>
</head>
<body>
    <main>
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="raizq">Raizes</label>
    <input type="number" name="raizq" id="raizq" placeholder="digite a raiz quadrada">
    <input type="submit" value="Enviar">
 </form>   

 <?php 
 $num=$_POST['raizq'] ?? 0;
 $raizq=$num ** (1/2);/*raiz quadrada */
 $raizc=$num ** (1/3); /*raiz cubica */
 echo"raiz quadrada: $raizq <br> raiz cubica $raizc";
 
 ?>
</main>
</body>
</html>