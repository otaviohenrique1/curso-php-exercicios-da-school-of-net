<?php
    // echo $_GET['planeta'];
    // echo "<br>";
    // echo $_GET['cor'];

    $paneta = isset($_GET['planeta']) ? $_GET['planeta'] : false;
    if ($paneta != false) {
        echo $paneta;
    } else {
        echo "Planeta não informado";
    }

    // echo "<br>";

    // $cor = isset($_GET['cor']) ? $_GET['cor'] : false;
    // if ($cor != false) {
    //     echo $cor;
    // } else {
    //     echo "Cor não informada";
    // }
    // $cor = $_GET['cor'] ?? "Cor não informada";
    // echo $cor;
    
    // Link da pagina para teste -> http://localhost/PHP_Curso_Pasta/avancando_php/get.php?planeta=Marte&cor=Azul
