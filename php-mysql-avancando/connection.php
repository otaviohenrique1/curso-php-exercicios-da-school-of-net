<?php
    $conn = new mysqli('localhost', 'root', '', 'php-mysql-avancando');
    if ($conn->connect_errno) {
        die('Falhou em conectar' . $conn->connect_errno);
    }
    return $conn;
