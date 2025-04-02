<?php
// Inicia a sessão para armazenar mensagens
session_start();

// Verifica se o formulário foi enviado e armazena a mensagem
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['mensagem'])) {
    $_SESSION['mensagens'][] = htmlspecialchars($_POST['mensagem']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    <h1>Olá, Mundo!</h1>
    
    <form method="post">
        <label for="mensagem">Digite uma mensagem:</label>
        <input type="text" id="mensagem" name="mensagem" required>
        <button type="submit">Enviar</button>
    </form>
    
    <h2>Mensagens Enviadas:</h2>
    <ul>
        <?php
        if (!empty($_SESSION['mensagens'])) {
            foreach ($_SESSION['mensagens'] as $msg) {
                echo "<li>" . $msg . "</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
