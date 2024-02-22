<?php 
$num=$_GET["numero"];
$inteiro=(int) $num;
$decimal=$num-$inteiro;
echo"Numero: $num <br> parte inteira: $inteiro <br> parte decimal: $decimal";
?>
<button onclick="javascript:history.go(-1)">Voltar</button>