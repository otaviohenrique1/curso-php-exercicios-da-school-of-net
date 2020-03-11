<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $_REQUEST -> Pega os resultados do $_POST, $_GET e do $_COOKIE
        echo "<pre>";
        var_dump($_POST);
        var_dump($_GET);
        var_dump($_REQUEST);
        var_dump(filter_input(INPUT_GET, 'page'));
        var_dump(filter_input(INPUT_POST, 'nome'));
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
        <form action="index.php?page=sobre-nos" method="post">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="submit" value="enviar">
        </form>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-iniciando/index.php -->
    </body>
</html>