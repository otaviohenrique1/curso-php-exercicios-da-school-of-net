<?php
    // ini_set() -> muda parametros e configuracoes no php.ini
    // ini_set('mysqli.allow_persistent', 'On');
    // ini_set('mysqli.max_persistent', -1);
    // ini_set('mysqli.max_links', 1);
    // localhost ou 127.0.0.1 
    $conn = new mysqli('localhost', 'root', '', 'php_mysql_iniciando');
    if ($conn->connect_errno) {
        die('Falhou em conectar: (' . $conn->connect_errno . ')' . $conn->connect_error);
    }
    // echo $conn->host_info;
    echo "<br>";
    // $sql = 'show tables';
    $sql = 'CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL
    );';
    // $sql = 'CREATE TABLE products (
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     email VARCHAR(255) NOT NULL
    // );';
    // $result = $conn->query($sql);
    // if (!$result = $conn->query($sql)) {
    //     echo "Tabela users já existe";
    // }
    if ($conn->query($sql)) {
        echo "Tabela users já existe";
    }
    echo "<br>";
    // $result = $conn->query('INSERT INTO users (email) VALUE ("erik@erik.com");');
    // var_dump($result);
    $result = $conn->query('SELECT * FROM users;');

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    // $users = $result->fetch_all();
    // $users = $result->fetch_all(MYSQLI_NUM);
    // $users = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($users as $user) {
        echo $user[0] . '-' . $user[1] .'<br';
    }
    // echo "<ul>";
    // while ($user = $result->fetch_assoc()) {
    //     echo '<li>' . $user['id'] . '-' . $user['email'] .'</li>';
    // }
    // echo "</ul>";

    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-mysql-rev2/connecions.php
    
    /*
        School of Net
        Programação
        PHP 
        Curso -> PHP com MySQL. - Atualização 2
        Aula -> CRUD listando dados
    */ 
