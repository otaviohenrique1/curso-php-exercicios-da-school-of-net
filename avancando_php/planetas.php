<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
       <title>Lista de planetas</title>
    </head>
    <body>
        <?php
            $planetas = [
                "Mercurio",
                "Vênus",
                "Terra",
                "Marte",
                "Júpiter",
                "Saturno",
                "Urano",
                "Netuno"
            ];
            // Link da pagina para teste -> http://localhost/PHP_Curso_Pasta/avancando_php/planetas.php
        ?>
        <ul>
            <?php foreach($planetas as $planeta):?>
                <li>
                    <a href="get.php?planeta=<?php echo $planeta; ?>"><?php echo $planeta; ?></a>
                </li>
            <?php endforeach?>
        </ul>
    </body>
</html>