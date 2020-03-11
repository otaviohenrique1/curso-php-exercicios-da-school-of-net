<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // isset() -> Verifica se o campo existe, se tem valor diferente de null
        // empty() -> Verifica se o campo existe e se esta vazio
        echo "<pre>";
        var_dump(isset($_POST['nome']));
        var_dump(empty($_POST['nome']));
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
        <form action="exemplo-6.php" method="post">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="submit" value="enviar">
        </form>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-iniciando/exemplo-6.php -->
    </body>
</html>