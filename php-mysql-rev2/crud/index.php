<?php
    $conn = require "connection.php";
    $result = $conn->query('SELECT * FROM users');
    $users = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
    </head>
    <body>
        <!-- table>thead>tr>th*3^^tbody>tr>td*3 -> gera tabela abaixo -->
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <a href="/PHP_Curso_Pasta/php-mysql-rev2/crud/ver.php?id=<?php echo $user['id']; ?>">Ver</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>
            <a href="/PHP_Curso_Pasta/php-mysql-rev2/crud/adicionar.php">Adicionar</a>
        </p>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-rev2/crud/index.php -->
    </body>
</html>