<?php
    $id = $_GET['id'] ?? 0 ;
    $id2 = $_GET['id'] ?? 0 ;
    $conn = new mysqli('localhost', 'root', '', 'php_mysql_iniciando');
    // $stmt = $conn->prepare('SELECT FROM users WHERE id > ?');
    // $stmt->bind_param('i', $id);
    /*
        i = integer
        s = string
        b = blob
        d = double
    */
    $stmt = $conn->prepare('SELECT FROM users WHERE id > ? AND id < ?');
    $stmt->bind_param('ii', $id, $id2);
    $stmt->execute();
    $result = $stmt->get_result();
    $users = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($users as $user) {
        echo $user[0] . '-' . $user[1] .'<br';
    }
    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-rev2/seguro.php?id=2
    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-rev2/seguro.php?id=2&id2=0
    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-rev2/seguro.php
