<?php
    // $nome = "  ";
    // trim($nome);
    // empty() -> "", 0, null, false, array();
    $nome = trim($_POST['nome']);
    $interesses = $_POST['interesse'] ?? null;
    $mensagem = strip_tags($_POST['mensagem']);

    if (empty($nome)) {
        echo "Informe o nome!<br>";
    }

    if (is_null($interesses)) {
        echo "Selecione pelo menos um item de interesse!<br>";
    }

    echo $mensagem;
