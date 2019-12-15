<?php //ainda não sei como deslogar; perguntar ao Ygor/Fernando
    session_start();    
    session_unset();
    session_destroy();
    header('Location: formLogin.php');
    exit();
?>