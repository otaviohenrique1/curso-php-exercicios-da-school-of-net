<?php
    $conn = require(__DIR__."/utils/connection.php");
    $term = $_POST['campo_busca'] ?? null;
    $term = '%' . $term . '%';
    $stmt = $conn->prepare('SELECT * FROM posts WHERE title LIKE ?;');
    $stmt->bind_param('s', $term);
    $stmt->execute();
    $result = $stmt->get_result();
    $posts = $result->fetch_all(MYSQLI_ASSOC);

    foreach ($posts as $post) {
        echo $post['title'] . "<br>";
        echo $post['body'] . "<br>";
    }

    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/search_comments_and_posts.php
