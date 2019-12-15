<?php
//algum arquivo de código também
    require "A_login.php";//qual a função desse require?

    $email = $_POST["email"]; //esse nome em aspas tem que estar referenciado no id e nome da form
    $senha = $_POST["senha"];
        
    session_start();

    if (autentica($email, $senha) == true) { //quando o login for efetuado, ele efetuará o redirecionamento para a área seguinte
        session_unset();
        $_SESSION["nome"] = $row["nome"]; 
        header("Location: perfildoaluno.php");
        exit();
    }
    else { //se os dados inseridos no login estiverem incorretos, o sistema redirecionará para a tela de inserção de dados de login
        $erro = "Login ou senha incorretos";        
        $_SESSION["erro"] = $erro;
        header("Location: formLogindeAlunos.php");
        exit();
    }    
?>