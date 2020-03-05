<?php
    $conn = require __DIR__.'/utils/connection.php';
    $save = true;
    $conn ->query('TRUNCATE comments');
    $sql = file_get_contents(__DIR__.'/insert_comments.sql');
    $conn->begin_transaction();
    $conn->query($sql);
    if ($save) {
        $conn->commit(); //Efetiva a query
    } else {
        $conn->rollback(); //Não efetiva a query
    }
    echo 'START SELECT <br>';
    $result = $conn->query('SELECT * FROM comments');
    $comments = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($comments as $post) {
        echo $post['email'] . "<br>";
        echo $post['comment'] . "<br>";
        echo $post['post_id'] . "<br>";
    }
    echo 'END SELECT <br>';
    // PHP_EOL -> Quebra de linha no PHP funciona no terminal

    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/insert_comments.php
