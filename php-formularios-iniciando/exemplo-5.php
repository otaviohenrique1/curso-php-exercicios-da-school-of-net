<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = filter_input(INPUT_POST, 'nome');
        $idade = filter_input(INPUT_POST, 'idade');
        // $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        // $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        $data = filter_input_array(INPUT_POST);
        echo "<pre>";
        var_dump($nome);
        var_dump($idade);
        var_dump($data);
        echo "</pre>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="exemplo-5.php" method="post">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="text" name="idade" placeholder="Idade"><br>
            <input type="submit" value="enviar">
        </form>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-iniciando/exemplo-5.php -->
    </body>
</html>