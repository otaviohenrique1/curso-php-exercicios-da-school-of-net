<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $idade = (int)$_POST['idade'];
        // $idade = (isset($_POST['idade'])) ? (int)$_POST['idade'] : null ;
        $idade = $_POST['idade'] ?? null;
        if (is_null($idade) || $idade === '') {
            die("Idade não foi informada");
        }
        if ($idade < 18) {
            die('Menor de idade');
        }
        $idade_string = (string)$idade;
        $idade_bool = (bool)$idade;
        $idade_array = (array)$idade;
        $idade_object = (object)$idade;
        $idade_float = (float)$idade;
        echo "<pre>";
        var_dump($idade_string, $idade);
        var_dump($idade_bool, $idade);
        var_dump($idade_array, $idade);
        var_dump($idade_object, $idade);
        var_dump($idade_float, $idade);
        echo "</pre>";
        echo '<br>' . 'Sua idade é ' . $idade;
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
        <form action="exemplo-3.php" method="post">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="submit" value="enviar">
        </form>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-iniciando/exemplo-3.php -->
    </body>
</html>