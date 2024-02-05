<?php 
date_default_timezone_set("America/Fortaleza");
/*
1-date_default_timezone_set: Esta função do PHP é usada para definir o fuso horário padrão no qual as operações de data e hora serão realizadas.
2-"America/Fortaleza": Este é o argumento passado para a função date_default_timezone_set, especificando o fuso horário desejado. No caso, é definido para "America/Fortaleza", que corresponde ao fuso horário da cidade de Fortaleza, no Brasil.
*/
echo "Data " . date("d/m/Y") . "<br> Horario " . date("g:i:s");
/*
1-"d/m/Y" representa o formato da data que inclui o dia (d), o mês (m), e o ano (Y), separados por barras. O Y tem que ser maisculo.
2-date("g:i:s"). A função date é usada para obter o horário atual no formato de horas (g), minutos (i), e segundos (s), separados por dois-pontos.
*/
?>