<?php // Dados do PHP
$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$turma = $_POST['turma'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

$link = mysqli_connect ($nome, $email, $matricula, $turma, $senha, $confirmaSenha);

if (mysqli_connect_error($link)) {

    echo "Erro de conexão";
}
else {
    echo "Conexão OK!";
}

session_start();  //Reinicializa um array de sessão com os valores originais
if ($senha != $confirmaSenha) {    
    $erro = "SENHAS NÃO COINCIDENTES";        
    $_SESSION["erro"] = $erro;
    header("Location: formCadastrodeAlunos.php");
    exit();}

# password hash
$hash = password_hash($senha, PASSWORD_DEFAULT);

$connection = mysqli_connect("localhost", "root", "", "plataforma_lispector");
// Check connection
if($connection === false){
die("Deu ruim, mano!" . mysqli_connect_error());
}

$sql = "SELECT id FROM alunos WHERE email='$email'";
$result = mysqli_query($connection, $sql);
$erro = "";
 
if (mysqli_num_rows($result) > 0) {
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