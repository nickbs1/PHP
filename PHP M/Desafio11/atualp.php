<?php 
$ano=$_GET["ano"];
$atual=date("Y");
$idade=$atual-$ano;
echo"Nasceu: $ano <br> Ano atual: $atual <br> idade que tera ate o final do ano: $idade";
?>