<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = require "connection.php";
        $email = $_POST['email'] ?? null;
        $stmt = $conn->prepare('INSERT INTO users (email) VALUES (?)');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        header('location: /PHP_Curso_Pasta/php-mysql-rev2/crud');
        die();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Adicionar</title>
    </head>
    <body>
        <h1>Adicionar usuário</h1>
        <form action="/PHP_Curso_Pasta/php-mysql-rev2/crud/adicionar.php" method="post">
            <input type="text" name="email">
            <input type="submit" value="Enviar">
        </form>
        <p>
            <a href="/PHP_Curso_Pasta/php-mysql-rev2/crud">Voltar</a>
        </p>
    </body>
</html>