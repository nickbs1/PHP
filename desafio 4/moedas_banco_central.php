<pre>
<?php 
/*
1-strtotime("-7 days"): A função strtotime do PHP converte uma descrição de data/hora em um timestamp Unix, que é um número inteiro representando o número de segundos desde a época (1º de janeiro de 1970). Neste caso, "-7 days" é uma string que indica que queremos a data de sete dias atrás em relação à data atual.
2-date("m-d-Y", ...) : A função date do PHP é usada para formatar uma data. O primeiro argumento passado para date é o formato desejado. Em "m-d-Y", "m" representa o mês, "d" o dia e "Y" o ano, tudo separado por hífens.
*/
$inicio = date("m-d-Y",strtotime("-7 days"));
/*
date("m-d-Y"): A função date do PHP é usada para obter a data atual e formatá-la de acordo com o formato desejado. No caso, "m-d-Y" representa o formato desejado, onde "m" representa o mês, "d" o dia e "Y" o ano, todos separados por hífens.
*/
$fim = date("m-d-Y");
/*
1-entre no site do banco central do brasil atualmente este é o site:
https://www.bcb.gov.br/
2-Em seguida coloque no lugar de www o nome dadosabertos.E fica assim:
https://dadosabertos.bcb.gov.br/
3-Em seguida clique em (Dólar comercial (venda e compra) - cotações diárias) e fica assim:
https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios
4-Em seguida clique Cotação do Dólar por período.ele vai te dar uma url.clique nela e seja redirecionado pra api de cotação do dolar.
https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MTAwfX0=
*/
$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
/*
Nesta url subistitua as data inicial por $inicio entre aspas simples e concatenação exemplo:
' . $inicio . ' 
e substitua a data final entre aspas simples e concatenação exemplo:
' . $fim . ' 
*/


/*
na pagina tem varias opções mais so vai precisar colocar
data inicial.
data final.
maximo=1.
ordenação= dataHoraCotacao desc.
saida=json.
e marque os campos cotação de compra e data e hora da cotação.
*/


$dados=json_decode(file_get_contents($url),true);
/*
1-$url: Esta é uma variável que armazena a URL da qual você deseja obter os dados.
2-file_get_contents($url): A função file_get_contents é usada para ler o conteúdo de um arquivo ou de uma URL. Neste caso, está sendo utilizada para obter o conteúdo da URL especificada em $url.
3-json_decode(...): A função json_decode é usada para decodificar uma string JSON. O primeiro argumento é a string JSON (no caso, o conteúdo obtido da URL), e o segundo argumento é um booleano opcional que determina se o resultado deve ser convertido em um array associativo (true) ou em objetos (false). Neste caso, true é usado, o que significa que o resultado será um array associativo.
4-$dados: A variável $dados armazena o resultado da decodificação do JSON. Ou seja, ela contém um array associativo que representa os dados obtidos da URL
*/
var_dump($dados);
/*
informaçoes sobre a varivel  
*/

$cotação=$dados["value"][0]["cotacaoCompra"];
$dia=$dados["value"][0] ["dataHoraCotacao"];
/*
1- $cotação = $dados["value"][0]["cotacaoCompra"]; e $dia = $dados["value"][0]["dataHoraCotacao"]; está sendo utilizado para extrair informações específicas de um array associativo, que provavelmente foi gerado a partir da decodificação de um JSON obtido de uma URL.
2-$dados["value"][0]["cotacaoCompra"]: Aqui, $dados é um array associativo que foi obtido da decodificação do JSON. Este código está acessando o valor associado à chave "value" do array $dados, e, em seguida, acessa o primeiro elemento [0] do array associado a essa chave "value". Dentro desse primeiro elemento, o código acessa o valor associado à chave "cotacaoCompra". Portanto, $cotação vai conter o valor da cotação de compra.
3-$dados["value"][0]["dataHoraCotacao"]: Similarmente, este código acessa a chave "dataHoraCotacao" dentro do primeiro elemento [0] associado à chave "value" no array $dados. Isso significa que $dia conterá o valor associado à data e hora da cotação.
*/


echo"cotação do dolar hoje $cotação <br> dia $dia";

?>
<!--
video desafio 4 de php curso em video do gustavo guanabara.
-->
</pre>