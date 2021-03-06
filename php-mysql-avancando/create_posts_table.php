<?php
    $conn = require(__DIR__."/utils/connection.php");
    $conn->query('DROP TABLE posts');
    $sql = 'CREATE TABLE posts(
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50) NOT NULL,
        body TEXT NOT NULL,
        FULLTEXT KEY title (title, body)
    );';

    if (!$conn->query($sql)) {
        die('Error: table exists');
    }

    $result = $conn->query('DESCRIBE posts');
    
    echo "<pre>";
    var_dump($result->fetch_all());
    echo "</pre>";    
    
    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-avancando/create_posts_table.php
