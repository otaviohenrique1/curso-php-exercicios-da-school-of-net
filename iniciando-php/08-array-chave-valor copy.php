<?php
    $array = array(
        "asd" => 40,
        1 => 200,
        2 => 100,
        3000 => 150,
        4 => "School of Net",
        5 => true
    );
    foreach ($array as $chave => $valor) {
        echo "[" . $chave . " => " . $valor . "]\n";
    }
    echo $array["asd"] . "\n";
    echo $array[1] . "\n";
    echo $array[3000] . "\n";
    var_dump($array);