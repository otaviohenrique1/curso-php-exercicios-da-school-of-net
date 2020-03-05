<?php
    $conn = require __DIR__.'/utils/connection.php';
    $save = true;
    $conn ->query('TRUNCATE posts');
    $sql = file_get_contents(__DIR__.'/insert_posts.sql');
    $conn->begin_transaction();
    $conn->query($sql);
    if ($save) {
        $conn->commit(); //Efetiva a query
    } else {
        $conn->rollback(); //Não efetiva a query
    }
    echo 'START SELECT <br>';
    $result = $conn->query('SELECT * FROM posts');
    $posts = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($posts as $post) {
        echo $post['title'] . PHP_EOL;
        echo "<br>";
        echo $post['body'] . PHP_EOL;
        echo "<br>";
        echo PHP_EOL;
    }
    echo 'END SELECT <br>';
    // PHP_EOL -> Quebra de linha no PHP funciona no terminal

    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/insert_posts.php
