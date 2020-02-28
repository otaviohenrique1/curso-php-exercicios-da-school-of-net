<?php
    $nome = "Luiz Carlos";
    $html = "<h1>Iniciando com PHP</h1>";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pagina</title>
    </head>
    <body>
        <?php
            echo 5 + 3;
            echo $nome;
        ?>
        <?php echo $nome; ?>
        <?php echo $html; ?>
    </body>
</html>