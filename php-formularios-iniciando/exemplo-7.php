<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // extract() -> Extrai conteudo de um array
        // compact() -> Junta variaveis em um array
        echo "<pre>";
        extract($_POST);
        var_dump($nome, $idade);
        $data = compact('nome', 'idade', '_POST');
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
        <form action="exemplo-7.php" method="post">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="text" name="idade" placeholder="Idade"><br>
            <input type="submit" value="enviar">
        </form>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-iniciando/exemplo-7.php -->
    </body>
</html>