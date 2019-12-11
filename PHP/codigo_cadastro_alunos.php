<?php // Dados do PHP

$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$turma = $_POST['turma'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

$link = mysqli_connect ($nome, $email, $matricula, $turma, $senha, $confirmaSenha); // Conectar com o Banco de Dados

if (mysqli_connect_error($link)) { // Retorna uma string descrevendo o ultimo erro da função connect

    echo "Erro de conexão"; // Mensagem que aparecerá, caso haja o erro.
}
else {
    echo "Conexão OK!";  // Mensagem que aparecerá, caso dê certo!
}

session_start();  //Reinicializa um array de sessão com os valores originais
if ($senha != $confirmaSenha) {     // Exige preenchimento nos campos do formulario (Senha e Confirma Senha)
    $erro = "SENHAS NÃO COINCIDENTES";     // Mensagem que aparecerá, caso haja o erro.   
    $_SESSION["erro"] = $erro;
    header("Location: formCadastrodeAlunos.php"); // Página que retornará, caso haja o erro.
    exit();}

# Hash da senha

$hash = password_hash($senha, PASSWORD_DEFAULT); // Transformação de uma grande quantidade de dados, em uma pequena quantidade de informações.

$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector"); // Conexão

if($connection === false){  // Condição caso haja o erro.   
die("Deu ruim, mano!" . mysqli_connect_error());  // Mensagem que aparecerá, caso haja o erro.   
}

$sql = "SELECT id FROM alunos WHERE email='$email'";
$result = mysqli_query($connection, $sql);
$erro = "";
 
if (mysqli_num_rows($mysqli_result) > 0) {
    $erro = "E-mail indisponível.";        
    $_SESSION["erro"] = $erro;
    header("Location: ../HTML/formCadastrodeAlunos.html");
    exit();
}
// Attempt insert query execution
$sql = "INSERT INTO alunos (nome, email, matricula, turma, senha) VALUES ('$nome', '$email', '$matricula', '$turma', '$hash')";
if(mysqli_query($connection, $sql)){
echo "DADOS INSERIDOS COM SUCESSO.";
 
} else{
  echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO $sql.";
}
mysqli_close($connection);

?>