<?php
    $captcha = $_SESSION['captcha'] ?? false;

    echo '<pre>';
    var_dump(filter_input(INPUT_POST, '_captcha'));
    echo '</pre>';
    
    if (!$captcha or $captcha !== filter_input(INPUT_POST, '_captcha')) {
        die('Captcha Validation fail');
    }
