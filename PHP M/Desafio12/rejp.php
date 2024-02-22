<?php 
$preço=$_GET["preço"];
$reajuste=$_GET["reajuste"];
$aumento=($preço*$reajuste)/100;
$preçon=$preço+$aumento;
echo"O preço: $preço <br> reajuste: $reajuste % <br> novo preço: $preçon"
?>