<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<pre>";
        var_dump($_POST);
        var_dump($_FILES);
        echo "</pre>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="exemplo-2.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nome"><br>
            <input type="email" name="email"><br>
            <input type="color" name="color"><br>
            <input type="date" name="date"><br>
            <input type="datetime" name="datetime"><br>
            <input type="file" name="file"><br>
            <input type="number" name="number"><br><br>
            <input type="radio" name="radio" value="valor 1"><br>
            <input type="radio" name="radio" value="valor 2"><br>
            <input type="radio" name="radio" value="valor 3"><br><br>
            <input type="checkbox" name="checkbox" value="checked"><br>
            <input type="submit" value="enviar">
        </form>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-iniciando/exemplo-2.php -->
    </body>
</html>