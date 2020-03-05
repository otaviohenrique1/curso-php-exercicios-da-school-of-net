<?php
    // Relacionando tabelas
    
    $conn = require(__DIR__."/utils/connection.php");
    
    $one_to_one = 'SELECT * FROM posts LEFT JOIN comments ON posts.id = comments.post_id WHERE posts.id = 1 GROUP BY posts.id;'; // Relacionamento um para um
    $result1 = $conn->query($one_to_one);
    $posts1 = $result1->fetch_all(MYSQLI_ASSOC);
    echo "<h1>One to one (Um para um)</h1>";
    echo "<pre>";
    var_dump($posts1);
    echo "</pre>";
    
    echo "<hr>";

    $one_to_many = 'SELECT * FROM posts LEFT JOIN comments ON posts.id = comments.post_id WHERE posts.id = 1;'; // Relacionamento um para muitos
    $result2 = $conn->query($one_to_many);
    $posts2 = $result2->fetch_all(MYSQLI_ASSOC);
    echo "<h1>One to many (Um para muitos)</h1>";
    echo "<pre>";
    var_dump($posts2);
    echo "</pre>";

    echo "<hr>";

    $belongs_to_1 = 'SELECT * FROM posts RIGHT JOIN comments ON posts.id = comments.post_id WHERE comments.id = 1;';
    $result3 = $conn->query($belongs_to_1);
    $posts3 = $result3->fetch_all(MYSQLI_ASSOC);
    echo "<h1>Belongs to 1</h1>";
    echo "<pre>";
    var_dump($posts3);
    echo "</pre>";

    echo "<hr>";

    $belongs_to_2 = 'SELECT * FROM comments RIGHT JOIN posts ON comments.post_id = posts.id WHERE comments.id = 1;';
    $result4 = $conn->query($belongs_to_2);
    $posts4 = $result4->fetch_all(MYSQLI_ASSOC);
    echo "<h1>Belongs to 2</h1>";
    echo "<pre>";
    var_dump($posts4);
    echo "</pre>";

    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/search_posts_and_comments.php
