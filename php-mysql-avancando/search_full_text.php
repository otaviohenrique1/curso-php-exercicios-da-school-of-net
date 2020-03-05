<?php
    $conn = require(__DIR__."/utils/connection.php");
    $term = $_POST['campo_busca'] ?? null;
    $term = '%' . $term . '%';
    $stmt = $conn->prepare('SELECT *, MATCH(title, body) AGAINST(? IN BOOLEAN MODE) AS score FROM posts ORDER BY score DESC;');
    $stmt->bind_param('s', $term);
    $stmt->execute();
    $result = $stmt->get_result();
    $posts = $result->fetch_all(MYSQLI_ASSOC);

    foreach ($posts as $post) {
        echo $post['title'] . "<br>";
        echo $post['body'] . "<br>";
        echo $post['score'] . "<br>";
    }

    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/search_like.php
?>
<a href="search_full_text.html">Voltar</a>
