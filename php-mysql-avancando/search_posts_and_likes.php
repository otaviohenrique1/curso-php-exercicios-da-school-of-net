<?php
    // Relacionamento muitos para muitos
    $conn = require(__DIR__."/utils/connection.php");

    $result = $conn->query('SELECT * FROM likes
        INNER JOIN users ON likes.user_id = users.id
        INNER JOIN posts ON likes.post_id = posts.id;'
    );

    $posts = $result->fetch_all(MYSQLI_ASSOC);

    echo "<pre>";
    var_dump($posts);
    echo "</pre>";
    exit;

    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/search_posts_and_likes.php
