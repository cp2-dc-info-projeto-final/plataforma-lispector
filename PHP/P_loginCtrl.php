<?php

    require "P_login.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];
        
    session_start();

    if (autentica($email, $senha) == true) {
        session_unset();
        $_SESSION["nome"] = $row["nome"]; 
        header("Location: perfildoprofessor.php");
        exit();
    }
    else {
        $erro = "Login ou senha incorretos";        
        $_SESSION["erro"] = $erro;
        header("Location: formLogindeProfessor.php");
        exit();
    }    
?>