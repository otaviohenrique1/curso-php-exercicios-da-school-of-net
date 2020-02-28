<?php
    // session_save_path(__DIR__.'\sessions'); // Salva a sessao em um arquivo em uma pasta
    session_start();
    // $_SESSION['meunome'] = 'Erik';
    // $_SESSION['usuario'] = [
    //     'nome' => 'Erik',
    //     'idade' => '32',
    //     'ativo' => true,
    //     'rate' => 4.3
    // ];
    // unset($_SESSION['usuario']); // Apaga a sessao
    $_SESSION['usuario'] = 'asd';
    $_SESSION['ultimo-acesso'] = '12-12-2012';
    $_SESSION['id-user'] = 3;
