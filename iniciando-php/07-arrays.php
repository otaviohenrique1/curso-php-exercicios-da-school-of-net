<?php
    $array = array(40, 200, 100, 150, "School of Net", true);
    echo $array[0] . "\n";
    echo $array[1] . "\n";
    echo $array[2] . "\n";
    echo $array[3] . "\n";
    echo $array[4] . "\n";
    echo $array[5] . "\n";
    foreach ($array as $chave => $valor) {
        echo "[" . $chave . " => " . $valor . "]\n";
    }
    $array = array(
        40,
        200,
        100,
        150,
        "School of Net",
        true
    );
    echo array(40, 200, 100, 150, "School of Net", true)[4] . "\n";
    $array1 = [
        40,
        200,
        100,
        150,
        "School of Net",
        true
    ];
    foreach ($array1 as $chave => $valor) {
        echo "[" . $chave . " => " . $valor . "]\n";
    }