<?php
    $conn = require(__DIR__."/utils/connection.php");
    $conn->query('DROP TABLE comments');
    $sql = 'CREATE TABLE comments(
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(100) NOT NULL,
        comment TEXT NOT NULL,
        post_id INT NOT NULL,
        FOREIGN KEY (post_id) REFERENCES posts(id)
    );';

    if (!$conn->query($sql)) {
        die('Error: table exists');
    }

    $result = $conn->query('DESCRIBE comments');
    
    echo "<pre>";
    var_dump($result->fetch_all());
    echo "</pre>";

    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/create_posts_table.php
