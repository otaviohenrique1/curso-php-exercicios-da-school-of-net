<?php
    $planetas = [
        "Mercurio",
        "Vênus",
        "Terra",
        "Marte",
        "Júpiter",
        "Saturno",
        "Urano",
        "Netuno"
    ];
    foreach ($planetas as $planeta) {
        echo $planeta . "\n";
    }
    $planetas2 = [
        0 => "Mercurio",
        1 => "Vênus",
        2 => "Terra",
        3 => "Marte",
        4 => "Júpiter",
        5 => "Saturno",
        6 => "Urano",
        7 => "Netuno"
    ];
    foreach ($planetas2 as $chave => $planeta) {
        echo "[" . $chave . " => " . $planeta . "]\n";
    }
