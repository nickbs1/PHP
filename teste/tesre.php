<?php

// URL do Banco Central do Brasil
$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='02-08-2024'&@dataFinalCotacao='02-15-2024'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";

// Fazendo a requisição à URL e obtendo o conteúdo
$response = file_get_contents($url);

// Decodifica o JSON obtido em um array associativo
$data = json_decode($response, true);

// Verifica se a decodificação foi bem sucedida
if ($data && isset($data['value'][0]['cotacaoCompra'])) {
    // Obtém a cotação de compra mais recente do dólar
    $cotacaoCompra = $data['value'][0]['cotacaoCompra'];

    // Verifica se foi enviado um valor em reais via POST
    if (isset($_POST['reais']) && is_numeric($_POST['reais'])) {
        // Obtém o valor em reais fornecido pelo usuário
        $reais = $_POST['reais'];
        
        // Calcula quantos dólares correspondem ao valor em reais, usando a cotação atual
        $dolares = $reais / $cotacaoCompra;

        // Exibe o resultado para o usuário
        echo "Com R$ $reais, você teria aproximadamente US$ " . number_format($dolares, 2, '.', ',');
    } else {
        // Se nenhum valor em reais foi fornecido ou o valor fornecido não é numérico
        echo "Por favor, insira um valor válido em reais.";
    }
} else {
    // Se a decodificação falhar ou os dados não estiverem no formato esperado
    echo "Erro ao obter a cotação do dólar.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Moeda</title>
</head>
<body>
    <h2>Conversor de Moeda</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="reais">Digite o valor em reais:</label>
        <input type="number" id="reais" name="reais" step="0.01" min="0" required>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
