<?php
    $media = 7;
    $frequencia = 75;

    $media_aluno = 8;
    $frequencia_aluno = 90;

    if ($media_aluno >= $media && $frequencia_aluno >= $frequencia) {
        echo "Aprovado!";
    } else {
        echo "Reprovado!";
    }
    
    if ($media_aluno >= $media || $frequencia_aluno >= $frequencia) {
        echo "Aprovado!";
    } else {
        echo "Reprovado!";
    }

    $chovendo = true;
    if (!$chovendo) {
        echo "Vou ficar em casa";
    } else {
        echo "Vou para a piscina";
    }

    // Operadores Lógicos no PHP
    // $a and $b; 	//E
    // $a or $b; 	//OU
    // $a xor $b; 	//XOR
    // ! $a; 	    //NÃO
    // $a && $b; 	//E
    // $a || $b; 	//OU

    /*
        Tabela verdade para operador lógico E (&&)
            +---------+---------+---------+
            |    A    |    B    | A && B  |
            +---------+---------+---------+
            |    V    |    V    |    V    |
            +---------+---------+---------+
            |    V    |    F    |    F    |
            +---------+---------+---------+
            |    F    |    V    |    F    |
            +---------+---------+---------+
            |    F    |    F    |    F    |
            +---------+---------+---------+

        Tabela verdade para operador lógico E (||)
            +---------+---------+---------+
            |    A    |    B    | A || B  |
            +---------+---------+---------+
            |    V    |    V    |    V    |
            +---------+---------+---------+
            |    V    |    F    |    V    |
            +---------+---------+---------+
            |    F    |    V    |    V    |
            +---------+---------+---------+
            |    F    |    F    |    F    |
            +---------+---------+---------+

        Tabela verdade para operador lógico E (!)
            +---------+---------+
            |    A    |   !A    |
            +---------+---------+
            |    V    |    F    |
            +---------+---------+
            |    F    |    V    |
            +---------+---------+
    */
