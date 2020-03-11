<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'O formulário foi enviado pelo ' . $_POST['nome'];
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="exemplo-1.php" method="post">
            <input type="text" name="nome"><br>
            <input type="submit" value="enviar">
        </form>
        <br>
        <a href="/?nome=Erik">Nome</a><br>
        <p>O <?php echo $_GET['nome']; ?> clicou no link acima</p>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-iniciando/exemplo-1.php -->
    </body>
</html>