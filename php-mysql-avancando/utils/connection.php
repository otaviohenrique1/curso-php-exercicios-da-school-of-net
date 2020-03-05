<?php
    $debug = true;
    // $debug = false;
    /*
        MYSQLI_REPORT_ERROR -> Mostra os erros
        MYSQLI_REPORT_OFF -> Não mostra os erros
        MYSQLI_REPORT_STRICT -> Troca os erros (os warnings) para excessoes
        MYSQLI_REPORT_INDEX -> Mostra se algum indice ruim foi utilizado em alguma query
        MYSQLI_REPORT_ALL -> Mostra os erros do MYSQLI_REPORT_ERROR, MYSQLI_REPORT_STRICT e do MYSQLI_REPORT_INDEX
    */
    if ($debug) {
        mysqli_report(MYSQLI_REPORT_ERROR); // Mostra os erros
    } else {
        mysqli_report(MYSQLI_REPORT_OFF); // Não mostra os erros
    }
    
    $conn = new mysqli('localhost', 'root', '', 'php_mysql_avancando');
    if ($conn->connect_errno) {
        die('Falhou em conectar' . $conn->connect_errno);
    }
    return $conn;
