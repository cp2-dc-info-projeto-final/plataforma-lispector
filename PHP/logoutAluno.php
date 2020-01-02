<!-- Destruimos a sessão e redirecionamos
		o usuário para uma página index.php -->

<?php
    session_start();    
    session_unset();
    session_destroy();
    header('Location:formLogindeAlunos.php');
    exit();
?>