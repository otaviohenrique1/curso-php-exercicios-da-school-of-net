<?php
    $conn = require "connection.php";
    $id = $_GET['id'] ?? null;
    $stmt = $conn->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc(); // Traz um resultado
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Ver</title>
    </head>
    <body>
        <h1><?php echo $user['email']; ?></h1>
        <p>O id deste usuario é <?php echo $user['id']; ?></p>
        <p>
            <a href="/PHP_Curso_Pasta/php-mysql-rev2/crud/editar.php?id=<?php echo $user['id']; ?>">Editar</a>
            <a href="/PHP_Curso_Pasta/php-mysql-rev2/crud/renover.php?id=<?php echo $user['id']; ?>">Remover</a>
        </p>
        <p>
            <a href="/PHP_Curso_Pasta/php-mysql-rev2/crud">Voltar</a>
        </p>
    </body>
</html>