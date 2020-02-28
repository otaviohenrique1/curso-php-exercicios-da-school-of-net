<?php
    // session_start();
    require __DIR__.'/session.php';
    session_destroy();
    header('location: index.php');