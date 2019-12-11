<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST["confirmaSenha"];

session_start();
if ($senha != $confirmaSenha) {    
    $erro = "SENHAS NÃO COINCIDENTES";        
    $_SESSION["erro"] = $erro;
    header("Location: ../HTML/formCadastrodeProfessores.php");
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


$sql = "SELECT id_professor FROM professor WHERE email='$email'";
$result = mysqli_query($connection, $sql);
$erro = "";
 
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível.";        
        $_SESSION["erro"] = $erro;
        header("Location: formCadastrodeProfessores.php");
        exit();
    }    
} else
{
    die ("$sql" . mysqli_error($connection));
}
// Attempt insert query execution
$sql = "INSERT INTO professor (nome, email, senha, matricula) VALUES ('$nome', '$email', '$hash', '$matricula')";

if(mysqli_query($connection, $sql)){
    header("Location: ../HTML/formLogindeProfessor.html");
} else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS." . mysqli_error($connection);
}
mysqli_close($connection);

?>