<?php
    $conn = require __DIR__.'/utils/connection.php';
    $save = true;
    $conn ->query('TRUNCATE likes');
    $conn ->query('TRUNCATE users');
    $sql1 = file_get_contents(__DIR__.'/insert_likes.sql');
    $sql2 = file_get_contents(__DIR__.'/insert_users.sql');
    $conn->begin_transaction();
    $conn->query($sql1);
    $conn->query($sql2);
    if ($save) {
        $conn->commit(); //Efetiva a query
    } else {
        $conn->rollback(); //Não efetiva a query
    }
    echo 'DONE <br>';
    
    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/insert_likes.php
