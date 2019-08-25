<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$matricula = $_POST['matricula'];
$turma = $_POST['turma'];
$link = mysqli_connect("localhost", "root", "", "plataforma_lispector");
 
// Check connection
if($link === false){
    die("ERRO: NÃO FOI POSSÍVEL CONECTAR." . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO alunos(nome, email, senha, matricula, turma) VALUES ('$nome', '$email', '$senha', '$matricula', '$turma')";
if(mysqli_query($link, $sql)){
    echo "DADOS INSERIDOS COM SUCESSO.";
} else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO $sql." . mysqli_error($link);
}
mysqli_close($link);
?>
