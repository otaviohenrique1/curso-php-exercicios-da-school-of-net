<?php
    session_start();
    // var_dump(session_save_path(__DIR__.'/../sessions'));
    // __DIR__ -> pega todo o caminho do diretorio na url antes do caminho da pasta atual
    // session_save_path(__DIR__.'/../sessions') -> Salva a sessao em um arquivo em uma pasta
    // var_dump($_SESSION['usuario']);
    var_dump($_SESSION);
