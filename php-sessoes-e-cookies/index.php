<?php
    // session_start();
    require __DIR__.'/session.php';
    $user = $_SESSION['user'] ?? null;
    if (!$user) {
        header('location: login.php');
        exit;
    }
?>
<h1>Página protegida</h1>
<p>Óla, <?php echo $user['email'];?></p>