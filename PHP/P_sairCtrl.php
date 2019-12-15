<?php //não sei como deslogar; pedir ajuda ao Ygor/Fernando
    session_start();    
    session_unset();
    session_destroy();
    header('Location: formLogindeProfessor.php');
    exit();
?>