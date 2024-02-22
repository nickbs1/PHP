<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio12M</title>
</head>
<body>
    <?php 
    $preço=$_POST['preço']??0;
    $reajuste=$_POST['reajuste']??0;
    $aumento=($preço*$reajuste)/100;
    $preçon=$preço+$aumento;
    ?>
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<label for="preço">Preço</label>
<input type="number" name="preço" id="preço" placeholder="digite o preço do produto" >
<br><br><br>
<label for="reajuste">Reajuste (<span id="p">?</span>%)</label>
<input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudavalor()"  >
<input type="submit" value="Enviar">
</form> 

<script>
mudavalor()
function mudavalor(){
p.innerText= reajuste.value;

}

</script>

<?php 
echo"O novo preço: $preçon";
?>
</body>
</html>