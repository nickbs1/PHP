<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio16</title>
</head>
<body>
    <main>
        <?php 
        $preço=$_POST['preço']??0;
        $reajuste=$_POST['reajuste']??0;
        $aumento=($preço*$reajuste)/100;
        $preçon=$preço+$aumento;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="preço">Preço</label>
    <input type="number" name="preço" id="preço" placeholder="Digite o preço">
    <br><br><br>
    <label for="reajuste">Reajuste (<span id="p">?</span>%)</label>
    <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudavalor()">
    <input type="submit" value="Enviar">
    
    </form>
    <?php 
    echo"preço ajustado: $preçon";
    ?>
<script>
    mudavalor()
    function mudavalor(){
        p.innerText=reajuste.value;


    }
</script>
</main>
</body>
</html>