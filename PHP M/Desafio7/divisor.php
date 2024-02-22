<?php 
$divisor=$_GET["divisor"];
$dividendo=$_GET["dividendo"];
$resto=$dividendo % $divisor;
$quociente=$dividendo/$divisor;
$quocientei=intdiv($dividendo,$divisor);
echo"O resto da divisão: $resto <br> quociente inteiro: $quocientei <br> divisão:$quociente";
?>
<button onclick="javascript:history.go(-1)">Voltar</button>