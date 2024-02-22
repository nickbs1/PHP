<?php 
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$p1=$_GET["p1"];
$p2=$_GET["p2"];
$m1=($n1*$p1+$n2*$p2)/2;
$m2=(($n1*$p1)+($n2*$p2))/($p1+$p2);
echo"media aritmetrica: $m1 <br> media ponderada: $m2";
?>