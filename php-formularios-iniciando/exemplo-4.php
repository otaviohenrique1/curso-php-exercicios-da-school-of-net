<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'] ?? null;
        $nome = trim($nome); // trim() -> Retira espaço no ínicio e final de uma string.
        $nome = stripslashes($nome); // stripslashes() ->  Remove barras invertidas de uma string.
        $nome = htmlspecialchars($nome); //htmlspecialchars() -> Converte caracteres especiais para a realidade HTML. < => &lt, > => &gt, " => &quote, ' => &#039, & => &amp
        echo $nome . "<br>";
        echo "<pre>";
        var_dump($nome);
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
        <form action="exemplo-4.php" method="post">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="submit" value="enviar">
        </form>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-iniciando/exemplo-4.php -->
    </body>
</html>