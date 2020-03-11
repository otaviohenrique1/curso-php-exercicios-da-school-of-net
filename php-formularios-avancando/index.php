<?php
    session_start();
    $_SESSION['csrf_token'] = sha1(rand(1, 20000));
    // var_dump($_SESSION);
    // exit;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="send.php" method="post">
            <input type="hidden" name="_csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <input type="text" name="nome" placeholder="Nome"><br>
            <input type="text" name="url" placeholder="Seu site"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <textarea name="" name="descricao" placeholder="Descrição"></textarea><br>
            <img src="captcha.php" alt=""><br>
            <input type="text" name="_captcha" placeholder="Digite as letras acima"><br>
            <input type="submit" value="Enviar">
        </form>
        <!-- Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-avancando/index.php -->
    </body>
</html>