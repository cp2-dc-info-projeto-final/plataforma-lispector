<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$senha = MD5($_POST['senha']);
$link = mysqli_connect("localhost", "root", "", "plataforma_lispector");
 
// Check connection
if($link === false){
    die("ERRO: NÃO FOI POSSÍVEL CONECTAR." . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO professor( nome, matricula, email, senha) VALUES ( '$nome', '$matricula', '$email', '$senha')";
if(mysqli_query($link, $sql)){
    echo "DADOS INSERIDOS COM SUCESSO.";
} else{
    echo "ERRO: NÃO FOI POSSÍVEL CONECTAR AO $sql." . mysqli_error($link);
}
mysqli_close($link);
?>