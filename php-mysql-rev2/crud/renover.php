<?php
    $conn = require "connection.php";
    $id = $_GET['id'] ?? null;
    $stmt = $conn->prepare('DELETE FROM users WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
    header('location: /PHP_Curso_Pasta/php-mysql-rev2/crud');
