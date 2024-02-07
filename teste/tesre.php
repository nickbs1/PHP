<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de formulário em PHP</title>
</head>
<body>

<h2>Exemplo de formulário em PHP</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Nome: <input type="text" name="nome">
  <input type="submit">
</form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processa os dados do formulário
    $nome = $_POST['nome'];
    echo "Olá, $nome!";
}
?>

</body>
</html>
