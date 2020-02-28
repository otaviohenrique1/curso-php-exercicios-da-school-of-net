<?php
    $email = $_GET['email'] ?? null ;
    $id = $_GET['id'] ?? 0 ;
    $conn = new mysqli('localhost', 'root', '', 'php_mysql_iniciando');
    // $result = $conn->query('INSERT INTO users (email) VALUES ("' . $email . '");');
    // $result = $conn->multi_query('INSERT INTO users (email) VALUES ("' . $email . '");');
    $result = $conn->query('SELECT FROM users WHERE id > ' . $id);
    $users = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($users as $user) {
        echo $user[0] . '-' . $user[1] .'<br';
    }
    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-rev2/inseguro.php
