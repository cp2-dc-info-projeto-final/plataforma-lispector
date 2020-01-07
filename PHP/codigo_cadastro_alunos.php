<?php // Dados do PHP

$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$turma = $_POST['turma'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

session_start();  //Reinicializa um array de sessão com os valores originais
if ($senha != $confirmaSenha 
|| $matricula <> "ACCL") 
{     // Exige preenchimento nos campos do formulario (Senha e Confirma Senha)
    $erro = ("Não foi possível efetuar o Cadastro. Verifique se as senhas conicidem e/ou se sua matrícula está correta!");  // Mensagem que aparecerá, caso haja o erro.   
    $_SESSION["erro"] = $erro;
    header("Location: formCadastrodeAlunos.php"); // Página que retornará, caso haja o erro.
    exit();}

 

# Hash da senha
$hash = password_hash($senha, PASSWORD_DEFAULT); // Transformação de uma grande quantidade de dados, em uma pequena quantidade de informações.

$connection = mysqli_connect ("localhost", "root", "", "plataforma_lispector"); // Conectar com o Banco de Dados

if (mysqli_connect_error($connection)) { // Retorna uma string descrevendo o ultimo erro da função connect

    echo "Erro de conexão"; // Mensagem que aparecerá, caso haja o erro.
}
else {
    echo "Conexão OK!";  // Mensagem que aparecerá, caso dê certo!
}

$sql = "SELECT id_aluno FROM alunos WHERE email='$email'";
$result = mysqli_query($connection, $sql);
$erro = "";
 
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível.";        
        $_SESSION["erro"] = $erro;
        header("Location: ../PHP/formCadastrodeAlunos.php");
        exit();
    }    
} else
{
    die ("$sql" . mysqli_error($connection));
}
// Attempt insert query execution
$sql = "INSERT INTO alunos (nome, email, matricula, turma, senha) VALUES ('$nome', '$email', '$matricula', '$turma', '$hash')";
if(mysqli_query($connection, $sql)){
    header("Location: ../PHP/formLogindeAlunos.php");
} else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO BANCO DE DADOS." . mysqli_error($connection);
}
mysqli_close($connection);

?>