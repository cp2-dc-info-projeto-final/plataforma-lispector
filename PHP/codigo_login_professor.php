<?php

$email =$_POST["email"];
$senha =$_POST["senha"];

session_start();
if ($senha) {    
    $erro = "SENHA INCORRETA!";        
    $_SESSION["erro"] = $erro;
    header("Location: ../HTML/formLogindeProfessor.html");
    exit();
}

# Hash da Senha

$hash = password_hash($senha, PASSWORD_DEFAULT);

$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");

if (mysqli_connect_error($connection)) { // Retorna uma string descrevendo o ultimo erro da função connect

    echo "Erro de conexão"; // Mensagem que aparecerá, caso haja o erro.
}
else {
    echo "Conexão OK!";  // Mensagem que aparecerá, caso dê certo!
}

        $sql = "SELECT email, senha FROM professor WHERE email='$email'";
    
        $result = mysqli_query($connection, $sql);

        $erro="";
        
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $erro = "E-mail indisponível.";        
                $_SESSION["erro"] = $erro;
                header("Location: ../HTML/formLogindeProfessor.html");
                exit();
            }    
        } else
        {
            die ("$sql" . mysqli_error($connection));
        }
        // Attempt insert query execution
        $sql = "INSERT INTO professor (email, senha,) VALUES ('$email', '$hash')";
        
        if(mysqli_query($connection, $sql)){

            header("Location: perfildoprofessor.php");
        } else{
            echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS." . mysqli_error($connection);
        }
        mysqli_close($connection);
        
        ?>