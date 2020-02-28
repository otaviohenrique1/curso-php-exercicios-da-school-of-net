<?php
    $conn = require("connection.php");
    $id = $_GET['id'] ?? null;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'] ?? null;
        $stmt = $conn->prepare('UPDATE users SET email=? WHERE id=?');
        $stmt->bind_param('si', $email, $id);
        $stmt->execute();
        header('location: /PHP_Curso_Pasta/php-mysql-rev2/crud');
        die();
    }

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
        <title>Adicionar</title>
    </head>
    <body>
        <h1>Adicionar usuário</h1>
        <form action="/PHP_Curso_Pasta/php-mysql-rev2/crud/editar.php?id=<?php echo $user['id']; ?>" method="post">
            <input type="text" name="email" value="<?php echo $user['email']; ?>">
            <input type="submit" value="Enviar">
        </form>
        <p>
            <a href="/PHP_Curso_Pasta/php-mysql-rev2/crud">Voltar</a>
        </p>
    </body>
</html>