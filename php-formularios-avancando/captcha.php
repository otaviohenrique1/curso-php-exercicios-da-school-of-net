<?php
    session_start();
    
    // Gera captcha
    header('Content-Type: image/jpeg');

    $image = imagecreate(200, 100);
    // $palavra = '';
    
    // $caracteres = array_merge(range('a', 'z'), range('A', 'Z'));
    $caracteres = range('a', 'z');
    shuffle($caracteres);
    
    $palavra = implode($caracteres);
    $palavra = substr($palavra, 0, 5);
    
    $_SESSION['captcha'] = $palavra;
    
    imagecolorallocate($image, 0, 0, 0);
    $cor = imagecolorallocate($image, 255, 255, 255);
    imagettftext($image, 30, rand(-5, 5), rand(20, 60), rand(40, 80), $cor, __DIR__.'/font.ttf', $palavra);
    
    imagejpeg($image);
    imagedestroy($image);
    
    // echo '<pre>';
    // var_dump($palavra);
    // echo '</pre>';
    
    // header() -> Envia um headers HTTP
    // imagecreate() -> Cria uma nova imagem baseada em paleta
    // range() -> Cria um array contendo uma faixa de elementos
    // array_merge() -> Combina um ou mais arrays
    // shuffle() -> Mistura os elementos de um array
    // implode() -> Junta elementos de uma matriz em uma string
    // substr() -> Retorna uma parte de uma string
    // imagettftext() -> Escreve texto na imagem usando fontes TrueType
    
    // phpinfo();
    // Link para teste -> http://localhost/PHP_Curso_Pasta/php-formularios-avancando/captcha.php
